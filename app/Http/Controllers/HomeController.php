<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;


use DB;
use Input;
use Hash;
use Validator;
use App;
use View;
use Excel;
use Storage;
use NumberFormatter;
use DateTime;
use Imagick;

//use App\Image;
use App\Role;
use App\User;
use App\Product;
use App\SubCategory;
//use duzun\hQuery;

use App\Classes\Extension\UserExt;

use App\Classes\Extension\ApplicationExt;
use App\Classes\Extension\RoleExt;
use Kodus\ImageHash\ImageHasher;



use App\Classes\Control\UserCtr;

use App\Classes\Control\RoleCtr;

use App\Classes\Control\ApplicationsCtr;

use Parallel\Parallel;
use Parallel\Storage\ApcuStorage;

//use Sunra\PhpSimple\HtmlDomParser;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
	 
	 private $userExt;
	private $applicationExt;
	private $roleExt;
	
	
	private $userCtr;
	
	private $applicationsCtr;
	
	private $roleCtr;
	
    public function __construct()
    {
        $this->middleware('auth');
		$this->userExt = new UserExt();
		
		$this->applicationExt = new ApplicationExt();
		$this->roleExt = new RoleExt();
		
		$this->userCtr = new UserCtr();
		
		$this->roleCtr = new RoleCtr();
		
		$this->applicationsCtr = new ApplicationsCtr();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->hasRole('Administrator')){
			return redirect('/administrator');
		}
		else{
			return redirect('/member');
		}
    }
public function cbir()
{
		

$products=Product::orderBy('id','DESC')->paginate(20);
	 $categories=SubCategory::get();	
		
		return view('index.user.cbir', compact('products','categories')
		);

	}
	public function displaySubCategoryProducts($cat){
       $sub_category=SubCategory::where('name',$cat)->first();

	    $products= $sub_category->products()->orderBy('id','DESC')->paginate(20);

		
        $categories=SubCategory::get();
		

		
		
		return view('index.user.sub-category-products', compact('products','sub_category','categories')
		);
	}
	public function cbir2()
    {
		//$str="<p> chemutt</p>";
    // $dom = HtmlDomParser::str_get_html('<html><body><p>Hello World!</p><p>Were here</p></body></html>');
	/*$context = stream_context_create(
    array(
        "http" => array(
            "header" => "User-Agent: Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.102 Safari/537.36"
        )
    )
);
//ini_set('memory_limit', '1024M');
	$dom = HtmlDomParser::file_get_html('https://www.ebay.com/sch/Cell-Phones-Smartphones-/9355/i.html');

      //$images=Image::orderBy('id','DESC')->paginate(18);
		
		//$images=null;
		//return view('index.user.cbir', compact('images')
		//);
      //$elems = $dom->find('div[class=sku -gallery]'); 
	  $products = [];
	  //echo  $elems;

// Find top ten videos
$i = 1;
//echo $dom;
foreach ($dom->find('li[class=s-item]') as $product) {
        if ($i > 100) {
                break;
        }
		//var_dump($product->attr);
        //$products[] = array($product->children(0)->children(4)->children(0)->outertext);
		//$products[] = array($product->children(0)->children(0)->children(0)->children(0)->children(0)->children(1)->src);
		//$products[] = array($product->children(0)->children(1)->children(1)->plaintext);//Title
		//$products[] = array($product->children(0)->children(1)->children(4)->first_child()->first_child()->plaintext);
		//$img =$product->find('img');
		//echo $img;
		
		/*foreach($product->find('img') as $element) {
               echo $element->src, "\n";
           }*/
		/*$am_ch4=null; 
		$t_ch3=null; 
		$i_ch6=null;
		$root=$product->children(0);
		if(isset($root)){
		$am_ch1=$root->children(1);
		if(isset($am_ch1)){
		$am_ch2=$am_ch1->children(4);
			
		if(isset($am_ch2)){
		$am_ch3=$am_ch2->children(0);
		if(isset($am_ch3)){
		$am_ch4=$am_ch3->plaintext;
			
			
			
		}	
			
			
		}	
			
		}
         $t_ch1=$root->children(1);
		 if(isset($t_ch1)){
			$t_ch2=$t_ch1->children(1);
           if(isset($t_ch2)){
			 $t_ch3=$t_ch2->plaintext;
          
			 
		   }
			
		 }

		$i_ch1=$root->children(0);
		if(isset($i_ch1)){
			$i_ch2=$i_ch1->children(0);
			if(isset($i_ch2)){
			$i_ch3=$i_ch2->children(0);
			if(isset($i_ch3)){
			$i_ch4=$i_ch3->children(0);
			if(isset($i_ch4)){
			$i_ch5=$i_ch4->children(1);
			if(isset($i_ch5)){
			$i_ch6=$i_ch5->src;
			
		}
			
		}
			
		}
			
		}
		}
			
			
			if(isset($am_ch4) &&isset($t_ch3)&&isset($i_ch6)){
				
           $needle='$';
              $flag = strstr($am_ch4, $needle);

              if ($flag){

                   $products[] = array($am_ch4,$t_ch3,$i_ch6);
                 //$product->price = $am_ch4;
				 //$product->title = $t_ch3;
				 //$product->image = $i_ch6;
				//array_push($products,$product);
				   
                 }
					
			}
		
		}
		

		
       

        $i++;
}*/
//return $i;
//return $products;
/*$size=sizeof($products);
for ($x = 0; $x < $size; $x++){
	$amount=explode("$", $products[$x][0]);
	$price=null;
	if(sizeof($amount)>0){
		$price=$amount[0];
	}
	Product::create([
				'title' => $products[$x][1],
				'image'=> $products[$x][2],
			'site_id' =>3,
			'currency' =>'$',
			'price' =>$price
			
			]);
}*/
//var_dump($videos);
	  
	 
    }
	
	public function searchImage(Request $request){
		
		
		$validator = $this->applicationExt->validateSearchImage($request->all());
		
		
		if ($validator->fails()) {
            return back()
                        ->withErrors($validator)
                        ->withInput();
        }
		set_time_limit(0);
		$file = $request->file('image');
		
		$imagePath = '/uploads/files/images/';
			
			$extension = $file->getClientOriginalExtension();
			
			$path = rand(0,100).time(). '.' . $extension;
			$exam_env = (new \App\Classes\Data\CbirData())->GetExamEnv();
			$disk = null;
			if ($exam_env === 'production') {
				$disk = Storage::disk('s3');
			$upload =$disk->put($imagePath .$path,file_get_contents($file));
				
			}else{
			$upload = $file->move(public_path().$imagePath , $path);	
			}
			
			// init the image objects
          // $image1 = new Imagick();
           //$image2 = new Imagick();

          // set the fuzz factor (must be done BEFORE reading in the images)
           //$image1->SetOption('fuzz', '2%');
		   
		   // read in the images
          
		  
		  /*$exam_env = (new \App\Classes\Data\CbirData())->getExamEnv();
										if ($exam_env === 'production') {
			
					                    $bucket=Config('filesystems.disks.s3.bucket');
					                    $key='uploads/files/images/'.$path;
                                        $s3 = Storage::disk('s3');
                                        $download_url=$s3->getDriver()->getAdapter()->getClient()->getObjectUrl($bucket, $key);
										$image1->readImage($download_url);
					
			}                          else{
				
					                   $download_url=$_SERVER['DOCUMENT_ROOT'] .'/uploads/files/images/'.$path;
									   $image1->readImage($download_url);
					
			}*/
			
			$hasher = new ImageHasher();

       	
            $download_url=$_SERVER['DOCUMENT_ROOT'] .'/uploads/files/images/'.$path;
									  
			$a_hash = $hasher->pHash($download_url);
			
			$category_id = $request->input('category_id');
			$category=SubCategory::find($category_id);
			$products=$category->products;
			
			//$products=Product::all();
			
			$items = array();
			foreach($products as $img){
				
			
				
			//$chemutt_img = file_get_contents($img->image);
            //$name = tempnam("/tmp", "chemutt");
            // file_put_contents($name, $chemutt_img);		                  
			//$image2->readImage($name);
					
			
			
			//$result = $image1->compareImages($image2, Imagick::METRIC_MEANSQUAREERROR);
			
			
			//if($result[1]<0.08){
				//return $result;
				
				//$img->distance = $result[1];
				//array_push($items,$img);
           
			//}
			
			$distance=$hasher->getDistance($a_hash, $img->phash);
			
			
			
				//return $result;
				
			$img->distance = $distance;
				
			array_push($items,$img);
				
			}
			
			
			
		    
		    
			$path1=$imagePath.$path;
			
			$exam_env = (new \App\Classes\Data\CbirData())->GetExamEnv();
			$disk = null;
			if ($exam_env === 'production') {
				
			if(Storage::disk('s3')->exists($path1)) {
                Storage::disk('s3')->delete($path1);
                   }
				
			}else{
			if (file_exists(public_path($path1))) {
			unlink(public_path($path1));		
			}}	
			
			//return $items;
										
				$size=sizeof($items);
			
			if($size>0){
				
			
			//return usort($items,'$this->sortByArticleId');
			 usort($items, function ($item1, $item2) {
    return $item1['distance'] <=> $item2['distance'];
});

//return $items;

	$items_sliced=array_slice($items, 0, 6, true);
	//return $items_sliced;
	return back()->with('error_code', 5)->with('similars', $items_sliced);
			}else{
			return back()->with('error_code', 6);	
			}
	}
}
