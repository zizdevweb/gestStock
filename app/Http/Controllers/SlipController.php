<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Warehouse;
use App\Slip;
use App\Product;

class SlipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
       $this->middleware('auth');
    } 
    
    public function index()
    {
        // 
        $slips= Slip::all();
        return view('slip.index',compact('slips')) ;
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $warehouse= Warehouse:: all();
        return view('slip.create',compact('warehouse'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data=$request->validate([
            'type'=>'required',
            'destinataire'=>'required',
            'n1'=>'required',
            'v1'=>'required|min:1'
        ]);
        $s= Slip::create(["type"=>strtolower($request->input('type')),
                          "warehouse_id"=>strtolower($request->input('destinataire')),
                          "user_id"=>Auth::id()]);
        $s1= $s->id;
         
        $s2= Slip::find($s1);
        $type= strtolower($request->input('type'));

        $n1=strtolower($request->input('n1'));
        $v1=$request->input('v1');
        $p1= Product::whereName($n1)->first();
        $data=$request->validate([
            'n1'=>'required',
            'v1'=>'required|min:1'
         ]);
        if($p1!=null){
            $data=$request->validate([
                    'n1'=>'required',
                    'v1'=>'required|numeric|min:1'
            ]);
            $q=$p1->quantity-$v1;
            if($q>0)
            {
                if($type=='livraison')
                {
                    $p1->update([
                        'quantity'=>$q
                    ]);
                   $s2->products()->attach($p1->id,['qte'=>$v1,'type_b'=>$type]);
                }
                else
                {
                    $p1->update([
                        'quantity'=>$q
                    ]);
                   $s2->products()->attach($p1->id,['qte'=>0,'type_b'=>$type,'qte_vente'=>$v1]);
                }
            }
           
        }


        $n2=strtolower($request->input('n2'));
        $v2=$request->input('v2');
        $p2= Product::whereName($n2)->first();
        if($p2!=null){
            $data=$request->validate([
                'v2'=>'numeric|min:1'
            ]);
            $q=$p2->quantity-$v2;
            if($q>0)
            {
                if($type=='livraison')
                {
                    $p2->update([
                        'quantity'=>$q
                    ]);
                   $s2->products()->attach($p2->id,['qte'=>$v2,'type_b'=>$type]);
                }
                else
                {
                    $p2->update([
                        'quantity'=>$q
                    ]);
                   $s2->products()->attach($p2->id,['qte'=>0,'type_b'=>$type,'qte_vente'=>$v2]);
                }
            }
            
        }
        
        $n3=strtolower($request->input('n3'));
        $v3=$request->input('v3');
        $p3= Product::whereName($n3)->first();
        if($p3!=null){
            $data=$request->validate([
                'v3'=>'numeric|min:1'
            ]);
            $q=$p3->quantity-$v3;
            if($q>0)
            {
                if($type=='livraison')
                {
                    $p3->update([
                        'quantity'=>$q
                    ]);
                   $s2->products()->attach($p3->id,['qte'=>$v3,'type_b'=>$type]);
                }
                else
                {
                    $p3->update([
                        'quantity'=>$q
                    ]);
                   $s2->products()->attach($p3->id,['qte'=>0,'type_b'=>$type,'qte_vente'=>$v3]);
                }
            }
            
        }

        $n4=strtolower($request->input('n4'));
        $v4=$request->input('v4');
        $p4= Product::whereName($n4)->first();
        if($p4!=null){
            $data=$request->validate([
                'v4'=>'numeric|min:1'
                ]);
            $q=$p4->quantity-$v4;
            if($q>0)
            {
                $p4->update([
                    'quantity'=>$q
                ]);
                $s2->products()->attach($p4->id,['qte'=>$v4]);
            }
           
        }

        $n5=strtolower($request->input('n5'));
        $v5=$request->input('v5');
        $p5= Product::whereName($n5)->first();
        if($p5!=null){
            $data=$request->validate([
                  'v5'=>'numeric|min:1'
                  ]);
            $q=$p5->quantity-$v5;
            if($q>0)
            {
                $p5->update([
                    'quantity'=>$q
                ]);
                $s2->products()->attach($p5->id,['qte'=>$v5]);
            }
           
        }

        $n6=strtolower($request->input('n6'));
        $v6=$request->input('v6');
        $p6= Product::whereName($n6)->first();
        if($p6!=null){
            $data=$request->validate([
                'v6'=>'numeric|min:1'
                ]);
            $q=$p6->quantity-$v6;
            if($q>0)
            {
                $p6->update([
                    'quantity'=>$q
                ]);
                $s2->products()->attach($p6->id,['qte'=>$v6]);
            }
            
        }

        $n7=strtolower($request->input('n7'));
        $v7=$request->input('v7');
        $p7= Product::whereName($n7)->first();
        if($p7!=null){
            $data=$request->validate([
                'v7'=>'required|numeric|min:1'
                ]);
            $q=$p7->quantity-$v7;
            if($q>0)
            {
                $p7->update([
                    'quantity'=>$q
                ]);
                $s2->products()->attach($p7->id,['qte'=>$v7]);
            }
           
        }

        $n8=strtolower($request->input('n8'));
        $v8=$request->input('v8');
        $p8= Product::whereName($n8)->first();
        if($p8!=null){
            $data=$request->validate([
                'v8'=>'required|numeric|min:1'
                ]);
            $q=$p8->quantity-$v8;
            if($q>0)
            {
                $p8->update([
                    'quantity'=>$q
                ]);
                $s2->products()->attach($p8->id,['qte'=>$v8]);
            }
            
        }

        $n9=strtolower($request->input('n9'));
        $v9=$request->input('v9');
        $p9= Product::whereName($n9)->first();
        if($p9!=null){
            $data=$request->validate([
                'v9'=>'required|numeric|min:1'
                ]);
            $q=$p9->quantity-$v9;
            if($q>0)
            {
                $p9->update([
                    'quantity'=>$q
                ]);
                $s2->products()->attach($p9->id,['qte'=>$v9]);
            }
          
        }

        $n10=strtolower($request->input('n10'));
        $v10=$request->input('v10');
        $p10= Product::whereName($n10)->first();
        if($p10!=null){
            $data=$request->validate([
                'v10'=>'required|numeric|min:1'
                ]);
            $q=$p10->quantity-$v10;
            if($q>0)
            {
                $p10->update([
                    'quantity'=>$q
                ]);
                $s2->products()->attach($p10->id,['qte'=>$v10]);
            }
           
        }

        $n11=strtolower($request->input('n11'));
        $v11=$request->input('v11');
        $p11= Product::whereName($n11)->first();
        if($p11!=null){
            $data=$request->validate([
                'v11'=>'required|numeric|min:1'
                ]);
            $q=$p11->quantity-$v11;
            if($q>0)
            {
                $p11->update([
                    'quantity'=>$q
                ]);
                $s2->products()->attach($p11->id,['qte'=>$v11]);
            }
            
        }

        $n12=strtolower($request->input('n12'));
        $v12=$request->input('v12');
        $p12= Product::whereName($n12)->first();
        if($p12!=null){
            $data=$request->validate([
                'v12'=>'required|numeric|min:1'
                ]);
            $q=$p12->quantity-$v12;
            if($q>0)
            {
                $p12->update([
                    'quantity'=>$q
                ]);
                $s2->products()->attach($p12->id,['qte'=>$v12]);
            }
            
        }

        $n13=strtolower($request->input('n13'));
        $v13=$request->input('v13');
        $p13= Product::whereName($n13)->first();
        if($p13!=null){
            $data=$request->validate([
                'v13'=>'required|numeric|min:1'
                ]);
            $q=$p13->quantity-$v13;
            if($q>0)
            {
                $p13->update([
                    'quantity'=>$q
                ]);
                $s2->products()->attach($p13->id,['qte'=>$v13]);
            }
            
        }

        $n14=strtolower($request->input('n14'));
        $v14=$request->input('v14');
        $p14= Product::whereName($n14)->first();
        if($p14!=null){
            $data=$request->validate([
                'v14'=>'required|numeric|min:1'
                ]);
            $q=$p14->quantity-$v14;
            if($q>0)
            {
                $p14->update([
                    'quantity'=>$q
                ]);
                $s2->products()->attach($p14->id,['qte'=>$v14]);

            }
            
        }
        $n15=strtolower($request->input('n15'));
        $v15=$request->input('v15');
        $p15= Product::whereName($n15)->first();
        if($p15!=null){
            $data=$request->validate([
                'v15'=>'required|numeric|min:1'
                ]);
            $q=$p15->quantity-$v15;
            if($q>0)
            {
                $p15->update([
                    'quantity'=>$q
                ]);
                $s2->products()->attach($p15->id,['qte'=>$v15]);
            }
            
        }
         return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $slip= Slip::find($id) ;
        return view('slip.show', compact('slip'));
    }
    
    public function showBis($id)
    {
        //
        $wslip= Slip::whereWarehouse_id($id)->get() ;
        return view('slip.showBis', compact('wslip'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $slip= Slip::find($id);
        $warehouse= Warehouse::all();
        return view('slip.edit',compact('slip','warehouse'));
         
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $slip= Slip::find($id);
        $prod=$slip->products;
        foreach($prod as $key=>$product)
        {
          /* On recupere la qte dans la table pivot dans qtePivot */
         $qtePivot=$product->pivot->qte;
          
         /* On recupere la qte dans la table product dans qte courante */
         $qty=$product->quantity;


         /* recuperation des valeurs saisies */
          $name=strtolower($request->input($key));
          $valeur=$request->input($key+15);
          $nameVerify=Product::WhereName($name);

         /* MAJ du nom et/ou de la qte courante Apres une verification 
         de l'existence du produit et d'une disponibilite de quantite  */
            if($nameVerify!=null && $valeur<$qty+$qtePivot)
            {
                $product->update([
                    'name'=>strtolower($request->input($key)),
                    'quantity'=>$qty+$qtePivot-$request->input($key+15)  
                 ]);
                 $slip->products()->updateExistingPivot($product->id, ['qte'=>$request->input($key+15)]); 
            }
         
        }
        
         $slip->update([
                          'warehouse_id'=>strtolower($request->input('destinataire'))
                       ]);
             return redirect()->back();      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
 
}
