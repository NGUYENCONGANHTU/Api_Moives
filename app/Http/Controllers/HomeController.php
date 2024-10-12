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

}
