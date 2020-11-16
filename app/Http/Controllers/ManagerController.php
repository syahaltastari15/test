<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\Product;
use App\Models\Type;
use App\Models\Distributor;
use App\Models\Customer;
use DB;
use Carbon\Carbon;
class ManagerController extends Controller
{
    public function index(Request $request)
    {




        $products = Product::all();
        if($request->has('cari') && $request->filter == 'stok'){
            $products = Product::where([
                ['stok_barang', 'LIKE', '%'.$request->cari.'%'],
                ])->orderBY('stok_barang', 'desc')
                ->get();
        }elseif($request->has('cari') && $request->filter == 'tanggal'){
            $products = Product::where([
                ['tanggal_masuk', 'LIKE', '%'.$request->cari.'%'],
                ])->orderBY('tanggal_masuk', 'desc')
                ->get();
        }elseif($request->has('cari') && $request->filter == ''){
           $products = Product::where('tanggal_masuk', 'LIKE', '%'.$request->cari.'%')
                    ->orWhere('stok_barang', 'LIKE', '%'.$request->cari.'%')
                    ->get();

        }

        $month = Carbon::now()->format('m');

        $productsCount = Product::all()->count();
        $customerCount = Customer::all()->count();
        $distributorsCount = Distributor::all()->count();
        $results = DB::select('select * from products where stok_barang = 0');
        $dateProducts = DB::table('products')
                                ->whereMonth('tanggal_masuk',$month)
                                ->orderBy('tanggal_masuk','desc')
                                ->get();

        return view('manager.laporan.index', compact('productsCount','customerCount','distributorsCount','results','dateProducts','products'));
    }

    public function laporanTransaksi()
    {

        $day = Carbon::now()->format('d');
        $month = Carbon::now()->format('m');
        $year = Carbon::now()->format('Y');



        $temps = DB::table('transactions')
                         ->whereYear('tanggal_beli',$year)
                         ->whereMonth('tanggal_beli',$month)
                        ->whereBetween('tanggal_beli', [
                            Carbon::parse('last monday')->startOfDay(),
                            Carbon::parse('next friday')->endOfDay(),
                        ])
                        ->orderBY('tanggal_beli', 'asc')
                        ->get();

        $total = [0,0,0,0,0,0,0];



            foreach($temps as $temp){
                $test =  Carbon::parse($temp->tanggal_beli)->format('D');
                switch ($test) {
                    case "Mon":
                        $total[0] +=1;
                        break;
                    case "Tue":
                        $total[1] +=1;
                        break;
                    case "Wed":
                        $total[2] +=1;
                        break;
                    case "Thu":
                        $total[3] +=1;
                        break;
                    case "Fri":
                        $total[4] +=1;
                        break;
                    case "Sat":
                        $total[5] +=1;
                        break;
                    case "Sun":
                        $total[6] +=1;
                        break;
                    default:

                        break;
                }
            }


        // dd(json_encode($test));



        $dayCount = DB::table('transactions')
                        ->whereYear('tanggal_beli',$year)
                        ->whereMonth('tanggal_beli',$month)
                        ->whereDay('tanggal_beli',$day)
                        ->count();
        $dayCount = DB::table('transactions')
                        ->whereYear('tanggal_beli',$year)
                        ->whereMonth('tanggal_beli',$month)
                        ->whereDay('tanggal_beli',$day)
                        ->count();

        $monthCount = DB::table('transactions')
                            ->whereYear('tanggal_beli',$year)
                            ->whereMonth('tanggal_beli',$month)
                            ->count();
        // dd($monthCount);
        $yearCount = DB::table('transactions')->whereYear('tanggal_beli',$year)->count();

        $yearMonth = DB::table('transactions')->whereYear('tanggal_beli',$year)->get();

        $sumMonth = [];

        for ($i=1; $i <=12 ; $i++) {
            $sumMonth[] = DB::table('transactions')
                        ->whereMonth('tanggal_beli',$i)
                        ->whereYear('tanggal_beli',$year)
                        ->count();
        }


        //   dd(json_encode($sumDay));

        $transactions = Transaction::all();
        return view('manager.laporan transaksi.index', compact('transactions','monthCount','yearCount','dayCount','sumMonth','total'));
    }
}
