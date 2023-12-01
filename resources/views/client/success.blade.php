<!DOCTYPE html>

<html lang="en">

@include('client/master/header')


   

    <body>
        

        @include('client/master/navigation')
        @yield('content')

        <div class="slider-section">

            <div class="container">

                <div class="categories">

                    <div class="categorie-section">

                        <a href="/apmax1/client">

                            <h5>get all  deals <i class="fa fa-tags" aria-hidden="true"></i></h5>

                        </a>

                    </div>

                </div>

            </div>

        </div>

        <!-- //***breadcrumb-section Start***// -->

        <div class="breadcrumb-section">

            <div class="breadcrumb-text">

                <div class="container">

                    <div class="row">

                        <div class="col-md-12 col-sm-12 col-xs-12">

                            <div class="breadcrumb-text padTB50">

                                <h3><span>Sign In</span></h3>

                              

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- //***breadcrumb-section End***// -->

        <!-- //***Blog-List Start***// -->

        <div class="latest-blog bg slidernav padTB60">

            <div class="container">

                <div class="row">

                    <div class="col-md-12 col-sm-12 col-xs-12 marB30">

                        <div class="box-x">

                            <div class="col-md-4 col-sm-5 col-xs-12">

                                <div class="row">
                                    <h3><a href="#">Transaction Details</a></h3>
                                    <figure>

                                        <img  src="{{ asset('assets/img/all/paypal.png')}}" alt="">

                                    </figure>

                                </div>

                            </div>

                            <div class="col-md-8 col-sm-7 col-xs-12">

                                <div class="row">

                                    <div class="box-detail res-width">

                                        <div class="col-md-12">

                                            <div class="row">
                                                <table id="my-table" class="table mb-0">
                                                    <thead>
                                                       <tr>
                                                          <th>
                                                           
                                                          </th>
                                                          <th>
                                                           
                                                          </th>
                                                       </tr>
                                                    </thead>
                                                    <tbody>
                                                       <tr>
                                                          <td class="text-center child-cell">
                                                           Transaction
                                                          </td>
                                                          <td class="text-center child-cell active">
                                                            Detail
                                                          </td>
                                                        
                                                       </tr>
                                                       
                                                       <tr>
                                                           <td class="text-center child-cell">
                                                            Payment Id
                                                           </td>
                                                           <td class="text-center child-cell active">
                                                             {{$data['id']}}
                                                           </td>
                                                         
                                                        </tr>
                                                       
                                                     
                                                        <tr>
                                                           <td class="text-center child-cell">
                                                            state
                                                           </td>
                                                           <td class="text-center child-cell active">
                                                             {{$data['state']}}
                                                           </td>
                                                         
                                                        </tr>
                           
                                                        <tr>
                                                           <td class="text-center child-cell">
                                                            method of payment
                                                           </td>
                                                           <td class="text-center child-cell active">
                                                             {{$data['payer']['payment_method']}}
                                                           </td>
                                                         
                                                        </tr>
                           
                                                        <tr>
                                                           <td class="text-center child-cell">
                                                            status
                                                           </td>
                                                           <td class="text-center child-cell active">
                                                             {{$data['payer']['status']}}
                                                           </td>
                                                         
                                                        </tr>
                                                  
                                                  
                                                      
                                                        @foreach ($data['payer']['payer_info'] as $keys=>$vals)
                                                        @if($keys!='shipping_address')
                                                        <tr>
                                                           <td class="text-center child-cell">
                                                            {{$keys}}
                                                           </td>
                                                           <td class="text-center child-cell active">
                                                             {{$vals}}
                                                           </td>
                                                         
                                                        </tr>
                                                    @endif
                                                        
                                                            @endforeach
                           
                                                            @foreach ($data['payer']['payer_info']['shipping_address'] as $keyss=>$valss)
                                                            <tr>
                                                               <td class="text-center child-cell">
                                                                {{$keyss}}
                                                               </td>
                                                               <td class="text-center child-cell active">
                                                                 {{$valss}}
                                                               </td>
                                                             
                                                            </tr>
                                                            @endforeach
                           
                                                            
                                                      
                                                        @foreach ($data['transactions'][0]['amount'] as $keys=>$vals)
                                                        @if($keys!='details')
                                                        <tr>
                                                           <td class="text-center child-cell">
                                                            {{$keys}}
                                                           </td>
                                                           <td class="text-center child-cell active">
                                                             {{$vals}}
                                                           </td>
                                                         
                                                        </tr>
                                                    @endif
                                                        
                                                            @endforeach
                           
                           
                                                            @foreach ($data['transactions'][0]['amount']['details'] as $keys=>$vals)
                                                           
                                                            <tr>
                                                               <td class="text-center child-cell">
                                                                {{$keys}}
                                                               </td>
                                                               <td class="text-center child-cell active">
                                                                 {{$vals}}
                                                               </td>
                                                             
                                                            </tr>
                                                       
                                                            
                                                                @endforeach
                                                      
                                                        
                                                     
                                                                <tr>
                                                                 <td class="text-center child-cell">
                                                                  Total
                                                                 </td>
                                                                 <td class="text-center child-cell active">
                                                                   {{$data['transactions'][0]['amount']['total']}}&nbsp;
                                                                   {{$data['transactions'][0]['amount']['currency']}}
                                                                 </td>                            
                                                              </tr>
                                                    
                           
                                                        
                                                     
                                                              <tr>
                                                               <td class="text-center child-cell">
                                                                Details
                                                               </td>
                                                               <td class="text-center child-cell active">
                                                               
                                                               </td>                            
                                                            </tr>
                           
                                                     
                                                            <tr>
                                                             <td class="text-center child-cell">
                                                              Total
                                                             </td>
                                                             <td class="text-center child-cell active">
                                                               {{$data['transactions'][0]['amount']['details']['subtotal']}}&nbsp;
                                                               {{$data['transactions'][0]['amount']['currency']}}
                                                             </td>                            
                                                          </tr>
                           
                                                          
                                                     
                                                          <tr>
                                                           <td class="text-center child-cell">
                                                            Total
                                                           </td>
                                                           <td class="text-center child-cell active">
                                                             {{$data['transactions'][0]['amount']['details']['subtotal']}}&nbsp;
                                                             {{$data['transactions'][0]['amount']['currency']}}
                                                           </td>                            
                                                        </tr>
                           
                                                        
                                                     
                                                        <tr>
                                                         <td class="text-center child-cell">
                                                           shipping
                                                         </td>
                                                         <td class="text-center child-cell active">
                                                           {{$data['transactions'][0]['amount']['details']['shipping']}}&nbsp;
                                                           {{$data['transactions'][0]['amount']['currency']}}
                                                         </td>                            
                                                      </tr>
                           
                                                      
                                                      <tr>
                                                       <td class="text-center child-cell">
                                                         insurance
                                                       </td>
                                                       <td class="text-center child-cell active">
                                                         {{$data['transactions'][0]['amount']['details']['insurance']}}&nbsp;
                                                         {{$data['transactions'][0]['amount']['currency']}}
                                                       </td>                            
                                                    </tr>
                           
                                                    
                           
                                                      
                                                    <tr>
                                                     <td class="text-center child-cell">
                                                       Handling Fee
                                                     </td>
                                                     <td class="text-center child-cell active">
                                                       {{$data['transactions'][0]['amount']['details']['handling_fee']}}&nbsp;
                                                       {{$data['transactions'][0]['amount']['currency']}}
                                                     </td>                            
                                                  </tr>
                           
                                                  
                                                      
                                                  <tr>
                                                   <td class="text-center child-cell">
                                                     Shipping Fee
                                                   </td>
                                                   <td class="text-center child-cell active">
                                                     {{$data['transactions'][0]['amount']['details']['shipping_discount']}}&nbsp;
                                                     {{$data['transactions'][0]['amount']['currency']}}
                                                   </td>                            
                                                </tr>
                           
                                                
                                                      
                                                <tr>
                                                 <td class="text-center child-cell">
                                                   Discount
                                                 </td>
                                                 <td class="text-center child-cell active">
                                                   {{$data['transactions'][0]['amount']['details']['discount']}}&nbsp;
                                                   {{$data['transactions'][0]['amount']['currency']}}
                                                 </td>                            
                                              </tr>
                           
                            <tr>
                                               <td class="text-center child-cell">
                                                 Item Detail
                                               </td>
                                               <td class="text-center child-cell active">
                                               
                                               </td>                            
                                            </tr>
                           
                                             @foreach ($data['transactions'][0]['item_list']['items'][0] as $key=>$val)
                                                   
                                                  
                                            <tr>
                                             <td class="text-center child-cell">
                                              {{$key}}
                                             </td>
                                             <td class="text-center child-cell active">
                                               {{$val}}
                                             </td>                            
                                          </tr>
                                          @endforeach  
                                              
                                                      
                                              <tr>
                                               <td class="text-center child-cell">
                                                 Shipping Address
                                               </td>
                                               <td class="text-center child-cell active">
                                               
                                               </td>                            
                                            </tr>
                                             
                           
                                            
                                                 @foreach ($data['transactions'][0]['item_list']['shipping_address'] as $key=>$val)
                                                   
                                                  
                                            <tr>
                                             <td class="text-center child-cell">
                                              {{$key}}
                                             </td>
                                             <td class="text-center child-cell active">
                                               {{$val}}
                                             </td>                            
                                          </tr>
                                          @endforeach  
                           
                                                     
                                                        <tr>
                                                         <td class="text-center child-cell">
                                                          Cart
                                                         </td>
                                                         <td class="text-center child-cell active">
                                                           {{$data['cart']}}
                                                         </td>                            
                                                      </tr>
                                                  
                           
                           
                                                    </tbody>
                                                 </table>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                

                </div>

            </div>

        </div>

        <!-- //***Blog-List End***// -->

        <div class="clear"></div>

       
        @include('client/master/footer')
        @include('client/master/script/script')

        @yield('script')

    </body>

</html>