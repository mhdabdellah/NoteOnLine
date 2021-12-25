@extends('layout')
@section('page-content')

           <div class="main-content"> 
                <h2 class="dash-title">overvivew</h2>

                <div class="dash-cards">
                    <div class="card-single">
                        <div class="card-body">
                            <span class="ti-briefcase"></span>
                            <div>
                            
                                <h5>le montent retarder</h5>
                                <h4>{{$retreds}}</h4>
                                
                            </div>
                        </div>
                        
                        <div class="card-footer">
                            <a href=""> </a>
                        </div>
                    </div>
                    <div class="card-single">
                        <div class="card-body">
                            <span class="ti-reload"></span>
                            <div>
                                <h5>montents totale a donner</h5>
                                <h4> {{$donnes}}</h4>
                               
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="">view all</a>
                        </div>
                    </div>
                    <div class="card-single">
                        <div class="card-body">
                            <span class="ti-check-box"></span>
                            <div>
                                <h5> totale a peyes</h5>
                                <h4>{{$peyes}}</h4>
                                
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="">view all</a>
                        </div>
                    </div>
                </div>
                <section class="recent">
                    <div class="activity-grid">
                        <div class="activity-card">
                            <h3>Liste de impayer</h3>
                            <div class="table-reponsive">

                                <table>
                                
                                    <thead>
                                       <tr>
                                           <th>nome </th>
                                           <th>prenom </th>
                                           <th>versement impeyer </th>
                                           <th> montent retarder</th>
                                           <th>information</th>
                                       </tr>
                                    </thead>
                                    
                                    @foreach ($contrats as $contrat)              
                                    <tbody>

                                                         

                                        <tr>
                                            <td> {{ $contrat->compte->client->nom }}</td>
                                            <td> {{ $contrat->compte->client->prenom }} </td>
                                            <td>  {{ $contrat->retardements->count() }}</td>
                                            <td >
                                            {{ $contrat->retardements->sum('montant') }}
                                            </td>
                                            <td>
                                                <span class="badge
                                                success"> {{ $contrat->compte->client->nom }}</span>
                                            </td>
                                        </tr>

                                       
                                       
                                        
                                      
        
                                    </tbody>
                                    @endforeach
                                    
                                   
                                </table>

                            </div>
                         
                        </div>
                        <div class="summary">
                            <div class="summary-card">
                                <div  class="summary-single">
                                    <span class="ti-di-badge"></span>
                                    <div>
                                        <h5>1960</h5>
                                        <small>Number of statif </small>
                                    </div>
                                </div>
                                <div  class="summary-single">
                                    <span class="ti-calendar"></span>
                                    <div>
                                        <h5>{{ $contrat->compte->client->count() }}</h5>
                                        <small>Number DE CLIENT  </small >
                                    </div>
                                </div>
                                <div  class="summary-single">
                                    <span class="ti-face-smile"></span>
                                    <div>
                                        <h5>12</h5>
                                        <small>Profile update request </small>
                                    </div>
                                </div>
                            </div>
                            <div class="bday-card">
                                <div class="bday-flex">
                                    <div class="bday-img"></div>
                                     <div class="bday-info">
                                    <h5>Dwayne f. Sanders</h5>
                                    <small>brithday Today</small>
                                   
                                     </div>
                                </div>
                                <div class="text-center">
                                    <button>
                                        <span class="ti-gift"></span>
                                        wish him
                                    </button>
                                </div>

                            </div>
                        </div>

                    </div>
                </section>




            </main>
         </div>
     </div>
     







   
    @endsection