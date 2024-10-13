<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\MovieRepository;
use App\Repositories\PlaceThreateRepository;
use App\Repositories\TheaterRepository;
use App\Repositories\NewsRepositories;
use App\Repositories\ActorRepository;
use App\Repositories\BannerRepositories;
use App\Http\Resources\Admins\Banner\BannerResource;
use App\Http\Resources\MovieResource;
use App\Http\Resources\TheaterResource;
use App\Http\Resources\ActorResource;
use App\Http\Resources\PlaceTheateResource;
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
    protected $actorRepository;

    /**
     * Construct
     */
    public function __construct()
    {
        $this->movieRepository = new MovieRepository();
        $this->placeThreateRepository = new PlaceThreateRepository();
        $this->theaterRepository = new TheaterRepository();
        $this->newsRepositories = new NewsRepositories();
        $this->bannerRepositories = new BannerRepositories();
        $this->actorRepository = new ActorRepository();
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
    public function homeMovies(Request $request)
    {
        try {
            $params = $request->all();
            $modelList = $this->movieRepository->search($params);
            $jsonModel = MovieResource::collection($modelList);
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
    public function theaterMovies(Request $request)
    {
        try {
            $params = $request->all();
            $modelList = $this->theaterRepository->search($params);
            $jsonModel = TheaterResource::collection($modelList);
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
    public function actorMovies(Request $request)
    {
        try {
            $params = $request->all();
            $modelList = $this->actorRepository->search($params);
            $jsonModel = ActorResource::collection($modelList);
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
    public function placeThreates(Request $request)
    {
        try {
            $params = $request->all();
            $modelList = $this->placeThreateRepository->search($params);
            $jsonModel = PlaceTheateResource::collection($modelList);
            return $jsonModel;
        } catch (\Throwable $th) {
            return response()->json([
                'data' => ['errors' => ['exception' => $th->getMessage()]]
            ], 400);
        }
    }

}
