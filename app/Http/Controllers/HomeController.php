<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\MovieRepository;
use App\Repositories\PlaceThreateRepository;
use App\Repositories\TheaterRepository;
use App\Repositories\NewsRepositories;
use App\Repositories\BannerRepositories;
use App\Http\Resources\Admins\Banner\BannerResource;
use App\Http\Resources\Admins\Category\CategoryResource;
use App\Http\Resources\Admins\Product\ProductResources;
use App\Http\Resources\Admins\Trademark\TrademarkResource;
use App\Http\Resources\Admins\Product\ProductImagesResources;
use App\Http\Resources\ProductReviewsResource;
use App\Http\Resources\Admins\Contact\ContactResource;

class HomeController extends Controller
{
    /**
     * @var Repository
     */
    protected $movieRepository;
    protected $placeThreateRepository;
    protected $theaterRepository;
    protected $newsRepositories;
    protected $bannerRepositories;

    /**
     * Construct
     */
    public function __construct()
    {
        $this->movieRepository = new MovieRepository();
        $this->placeThreateRepository = new PlaceThreateRepository();
        $this->theaterRepository = new TheaterRepository();
        $this->newsRepositories = new NewsRepositories();
        $this->newsRepositories = new BannerRepositories();
    }

    /**
     * Get data by multiple fields.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function homeBanner(Request  $request)
    {
        try {
            $params = $request->all();
            $modelList = $this->bannerRepositories->search($params);
            $jsonModel = BannerResource::collection($modelList);
            return $jsonModel;
        } catch (\Throwable $th) {
            return response()->json([
                'data' => ['errors' => ['exception' => $th->getMessage()]]
            ], 400);
        }
    }

    /**
     * Get data by multiple fields.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function homeCategory(Request  $request)
    {
        try {
            $params = $request->all();
            $modelList = $this->categoryRepositories->search($params);
            $jsonModel = CategoryResource::collection($modelList);
            return $jsonModel;
        } catch (\Throwable $th) {
            return response()->json([
                'data' => ['errors' => ['exception' => $th->getMessage()]]
            ], 400);
        }
    }

    /**
     * Get data by multiple fields.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function homeProduct(Request  $request)
    {
        $params = $request->all();
        $modelList = $this->productRepositories->search($params);      
        $jsonModel = ProductResources::collection($modelList);
        return $jsonModel;
    }

    /**
     * Get Object By Id.
     *
     * @param  int  $id - Model Id
     * @return \Illuminate\Http\Response
     */
    public function homeProductDetail($id)
    {
        try {
            $model = $this->productRepositories->findOrFail($id);
            $this->productRepositories->updateProductView($model);
        } catch (\Throwable $th) {
            return response()->json([
                'data' => ['errors' => ['exception' => $th->getMessage()]]
            ], 400);
        }
        $jsonModel = new ProductResources($model);

        return $jsonModel;
    }

    /**
     * Get data by multiple fields.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function homeTrademark(Request  $request)
    {
        try
        {
            $params = $request->all();
            $modelList = $this->trademarkRepositories->search($params);  
            $jsonModel = TrademarkResource::collection($modelList);
            return $jsonModel;
        }catch(\Throwable $th){
            return response()->json([
                'data' => ['errors' => ['exception' => $th->getMessage()]]
            ], 400);
        }
    }

    /**
     * Get data by multiple fields.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function homeProductImages(Request $request)
    {
        try
        {
            $params = $request->all();
            $modelList = $this->productImageRepositories->search($params);
            $jsonModel = ProductImagesResources::collection($modelList);
            return $jsonModel;

        }catch(\Throwable $th){
            return response()->json([
                'data' => ['errors' => ['exception' => $th->getMessage()]]
            ], 400);
        }
    }

    /**
     * Get data by multiple fields.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function homeProductReview(Request $request)
    {
        try
        {
            $params = $request->all();
            $modelList = $this->productReviewRepository->search($params);
            $jsonModel = ProductReviewsResource::collection($modelList);
            return $jsonModel;

        }catch(\Throwable $th){
            return response()->json([
                'data' => ['errors' => ['exception' => $th->getMessage()]]
            ], 400);
        }
    }

    public function updateProductReview(Request $request,$id){
        try
        {
            $model = $this->productReviewRepository->update($request->all(),$id);
            $jsonModel = new ProductReviewsResource($model);
            return $jsonModel;
        }catch(\Throwable $th){
            return response()->json([
                'data' => ['errors' => ['exception' => $th->getMessage()]]
            ], 400);
        }
    }

    public function createProductReview(Request $request){
        try
        {
            $model = $this->productReviewRepository->create($request->all());
            $jsonModel = new ProductReviewsResource($model);
            return $jsonModel;
        }catch(\Throwable $th){
            return response()->json([
                'data' => ['errors' => ['exception' => $th->getMessage()]]
            ], 400);
        }
    }

    public function deleteProductReview($id)
    {
        try
        {
            $modelList = $this->productReviewRepository->delete($id);
            return response($modelList);

        }catch(\Throwable $th){
            return response()->json([
                'data' => ['errors' => ['exception' => $th->getMessage()]]
            ], 400);
        }
    }

    public function updateHeartProduct(Request $request,$id){
        try
        {
            $model = $this->productRepositories->update($request->all(),$id);
            $jsonModel = new ProductResources($model);
            return $jsonModel;
        }catch(\Throwable $th){
            return response()->json([
                'data' => ['errors' => ['exception' => $th->getMessage()]]
            ], 400);
        }
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  App\Http\Requests\Banner\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function homeStoreContact(Request $request)
   {   
       try {
           $model = $this->contactRepository->create($request->all());
       } catch (\Throwable $th) {
           return response()->json([
               'data' => ['errors' => ['exception' => $th->getMessage()]]
           ], 400);
       }
       $jsonModel = new ContactResource($model);

       return $jsonModel;
   }


}
