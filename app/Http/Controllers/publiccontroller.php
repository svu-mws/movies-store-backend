<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\movie ;
 use App\Http\Resources\movie as movie1 ;
use App\movie_rate;
class publiccontroller extends Controller
{
    //

      public function index()
  {
    try {
              $allmovies = movie::paginate(10);
        } catch (QueryException $exception) {
            $errorMessage = $exception->getMessage();
            $errorCode = $exception->getCode();
            // Return the response to the client..
            $file = $exception->getFile();
            return response()->json([
                'status' => 'failed',
                'message' => $errorMessage,
                'file' => $file,
                'code' => $errorCode,
            ], 500);

        }
        return response($movies, 202);
    }

    // return movie1::collection($allmovies);
    // return view('welcome',compact('allmovies'));
  }
  public function singlmovie($id)
    {
      try {
                $movie = movie::find($id);
          } catch (QueryException $exception) {
              $errorMessage = $exception->getMessage();
              $errorCode = $exception->getCode();
              // Return the response to the client..
              $file = $exception->getFile();
              return response()->json([
                  'status' => 'failed',
                  'message' => $errorMessage,
                  'file' => $file,
                  'code' => $errorCode,
              ], 500);

          }
          return response($movie, 202);
      }

//
// movie1::withoutWrapping();
// return new movie1($movie);

      // return view('movies',compact('movie'),compact('rate'));
    }
    public function about()
    {
      return new movie1(['show about page']);
    }
    public function contact()
    {
      return new movie1(['show contact page']);
    }
    public function contactpost()
    {
      return new movie1([]);
    }
  public function  MovieNameSeachByletter($letter)

  try {
  $Allmovies = movie::all();
  } catch (QueryException $exception) {
    $errorMessage = $exception->getMessage();
    $errorCode = $exception->getCode();
    // Return the response to the client..
    $file = $exception->getFile();
    return response()->json([
        'status' => 'failed',
        'message' => $errorMessage,
        'file' => $file,
        'code' => $errorCode,
    ], 500);
  }


    $moviesStartWithLetter =[];
    foreach ($Allmovies as $movie)
      if ($movie->name[0] ==   $letter)
      {
        array_push($moviesStartWithLetter,$movie);
      }
return response($moviesStartWithLetter,202);
    // return movie1::collection($moviesStartWithLetter);
  }
  public function  actorSeachByletter($letter)
  {
    try {
  $Allactors = actor::all();
    } catch (QueryException $exception) {
      $errorMessage = $exception->getMessage();
      $errorCode = $exception->getCode();
      // Return the response to the client..
      $file = $exception->getFile();
      return response()->json([
          'status' => 'failed',
          'message' => $errorMessage,
          'file' => $file,
          'code' => $errorCode,
      ], 500);
    }


    $actorsStartWithLetter =[];
    foreach ($Allactors as $actor)
      if ($actor->name[0] ==   $letter)
      {
        array_push($actorsStartWithLetter,$actor);
      }
      return response($actorsStartWithLetter,202);
    // return movie1::collection($actorsStartWithLetter);
  }
  public function  producerSeachByletter($letter)
  {
    try {
  $AllProducers = producer::all();
    } catch (QueryException $exception) {
      $errorMessage = $exception->getMessage();
      $errorCode = $exception->getCode();
      // Return the response to the client..
      $file = $exception->getFile();
      return response()->json([
          'status' => 'failed',
          'message' => $errorMessage,
          'file' => $file,
          'code' => $errorCode,
      ], 500);
    }



    $ProducersStartWithLetter =[];
    foreach ($AllProducers as $producer)
      if ($producer->name[0] ==   $letter)
      {
        array_push($actorsStartWithLetter,$actor);
      }
return response($actorsStartWithLetter,202);
    // return movie1::collection($ProducersStartWithLetter);
  }
  public function serach($moviename = null , $actorsname = null ,$producersname=null,$typesname=null )
  {
    if($moviename = null && $actorsname = null && $producersname=null && $typesname=null)
    {
        return (new movie1(['no parameter has been passed']))
        ->respond()
        ->setStatusCode(204);
    }
      elseif ($moviename!= null && $actorsname != null && $producersname!=null&&$typesname!=null)
      {

          $movie=movie::where('name',$moviename);
        if($movie != null)
          {
              $producer = producer::find($movie->prodicer_id)->first()->where('name',$producersname);
              if($producer != null)
                {
                  $moviewithproducer = $movie->whereIn('prodicer_id',$producer->id);
                  $actors_ids = (actor::whereIn('name',$actorsname))->id;
                  $movies_actors = movies_actor::whereIn('actor_id',$actors_ids);
                  foreach ($movies_actors as $acotrinmovie) {
                    if ($movies_actors->movie_id != $moviewithproducer->id)
                    {
                      return (new movie1(['no resut']))
                      ->respond()
                      ->setStatusCode(204);
                    }
                    $moviewithproducerwithactors =


                  }
                }
                return (new movie1(['no resut']))
                ->respond()
                ->setStatusCode(204);

          }
        return (new movie1(['no parameter has been passed']))
        ->respond()
        ->setStatusCode(204);

      }
      elseif($typesname=null)
  }

}
