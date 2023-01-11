@extends('layout')
  
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('My Travel Wish List') }}</div>
  
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if(Auth::user())
                        Welcome <b>{{Auth::user()->name}}</b>!
                        </p>
                        Choose your wish list of the year 2023:
                        </p>
                    <style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;}
.tg td{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
  overflow:hidden;padding:10px 5px;word-break:normal;}
.tg th{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
  font-weight:normal;overflow:hidden;padding:10px 5px;word-break:normal;}
.tg .tg-0pky{border-color:inherit;text-align:left;vertical-align:top}
.tg .tg-0lax{text-align:left;vertical-align:top}
</style>
<table class="tg">
<thead>
  <tr>
    <th class="tg-0pky"><a href="https://www.tripadvisor.com/Attractions-g298283-Activities-Langkawi_Langkawi_District_Kedah.html" target="_blank" rel="noopener noreferrer">LANGKAWI</a></th>
    <th class="tg-0pky"><a href="https://www.tripadvisor.com/Attractions-g298309-Activities-Kuching_Sarawak.html" target="_blank" rel="noopener noreferrer">KUCHING SARAWAK</a></th>
  </tr>
</thead>
<tbody>
  <tr>
    <td class="tg-0pky"><img src="https://www.linkpicture.com/q/langkawi_1.webp" alt="LANGKAWI" width="200" height="150"></td>
    <td class="tg-0pky"><img src="https://www.linkpicture.com/q/Kuching_1.jpg" alt="KUCHING" width="200" height="150"></td>
  </tr>
  <tr>
    <td class="tg-0lax"><a href="https://www.cameronhighland.net/" target="_blank" rel="noopener noreferrer">CAMERON HIGHLANDS</a></td>
    <td class="tg-0lax"><a href="https://www.tripadvisor.com/Tourism-g660784-Genting_Highlands_Pahang-Vacations.html" target="_blank" rel="noopener noreferrer">GENTING HIGHLANDS</a></td>
  </tr>
  <tr>
    <td class="tg-0lax"><img src="https://www.linkpicture.com/q/cameron_3.jpg" alt="CAMERON HIGHLANDS" width="200" height="150"></td>
    <td class="tg-0lax"><img src="https://www.linkpicture.com/q/genting_3.jpg" alt="GENTING HIGHLANDS" width="200" height="150"></td>
  </tr>
</tbody>
</table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
