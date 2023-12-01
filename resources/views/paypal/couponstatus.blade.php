<!DOCTYPE html>
<html xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office" lang="en">

<head>
	<title></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"><!--[if mso]><xml><o:OfficeDocumentSettings><o:PixelsPerInch>96</o:PixelsPerInch><o:AllowPNG/></o:OfficeDocumentSettings></xml><![endif]--><!--[if !mso]><!-->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css"><!--<![endif]-->
	<style>
		* {
			box-sizing: border-box;
		}

		body {
			margin: 0;
			padding: 0;
		}

		a[x-apple-data-detectors] {
			color: inherit !important;
			text-decoration: inherit !important;
		}

		#MessageViewBody a {
			color: inherit;
			text-decoration: none;
		}

		p {
			line-height: inherit
		}

		.desktop_hide,
		.desktop_hide table {
			mso-hide: all;
			display: none;
			max-height: 0px;
			overflow: hidden;
		}

		.image_block img+div {
			display: none;
		}

		@media (max-width:700px) {

			.desktop_hide table.icons-inner,
			.social_block.desktop_hide .social-table {
				display: inline-block !important;
			}

			.icons-inner {
				text-align: center;
			}

			.icons-inner td {
				margin: 0 auto;
			}

			.image_block img.fullWidth {
				max-width: 100% !important;
			}

			.mobile_hide {
				display: none;
			}

			.row-content {
				width: 100% !important;
			}

			.stack .column {
				width: 100%;
				display: block;
			}

			.mobile_hide {
				min-height: 0;
				max-height: 0;
				max-width: 0;
				overflow: hidden;
				font-size: 0px;
			}

			.desktop_hide,
			.desktop_hide table {
				display: table !important;
				max-height: none !important;
			}
		}
	</style>
</head>

<body style="background-color: rgb(255, 255, 255) 37, 18); margin: 0; padding: 0; -webkit-text-size-adjust: none; text-size-adjust: none;">
	<table class="nl-container" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: rgb(223, 156, 13);">
		<tbody>
			<tr>
				<td>
					<table class="row row-1" align="center" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
						<tbody>
							<tr>
								<td>
									<table class="row-content stack" align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000; width: 680px; margin: 0 auto;" width="680">
										<tbody>
											<tr>
												<td class="column column-1" width="100%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; padding-bottom: 5px; padding-top: 5px; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;">
													<div class="spacer_block block-1" style="height:40px;line-height:40px;font-size:1px;">&#8202;</div>
													<table class="image_block block-2" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
														<tr>
															<td class="pad" style="width:100%;padding-right:0px;padding-left:0px;">
																<div class="alignment" align="center" style="line-height:10px"><a href="{{ config('app.url') }}/apmax1/client" target="_blank" style="outline:none" tabindex="-1">
                                  <img src="{{ config('app.url') }}apmax1/public/assets/img/logo.png" style="display: block; height: auto; border: 0; max-width: 136px; width: 100%;" width="136" alt="Logo" title="Logo"></a></div>
															</td>
														</tr>
														<tr>
															<td class="pad" style="width:100%;padding-right:0px;padding-left:0px;">
																<div class="alignment" align="center" style="line-height:10px">
																	<a href="#" target="_blank" style="outline:none" tabindex="-1">
																	<h2>Here is your Coupon !!!</h2>
																	</a>
																</div>
															</td>
														</tr>
													</table>
													<div class="spacer_block block-3" style="height:40px;line-height:40px;font-size:1px;">&#8202;</div>
													<table class="image_block block-4" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
														<tr>
															<td class="pad" style="width:100%;">
																<div class="alignment" align="center" style="line-height:10px">
                                  <a href="{{config('app.url')}}apmax1/client/scan/{{$pid}}" target="_blank" style="outline:none" tabindex="-1">
                                  <img src="data:image/png;base64, {!! base64_encode(QrCode::size(150)
                                    ->format('png')
                                    ->merge('/public/assets/img/logo.png',.4)
                                    ->errorCorrection('M')
                                    ->style('square')
                                ->eye('circle')
                                ->gradient(255, 0, 0, 0, 0, 255, 'diagonal')
                                ->margin(0)
                                    ->generate(
                                        ''.config('app.url').'apmax1/client/scan/'.$pid.'',
                                    )) !!}"></a></div>
															</td>
														</tr>
													</table>
													<table class="paragraph_block block-5" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;">
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
                                    {{$details['data']['id']}}
                                  </td>
                                
                               </tr>
                              
                            
                               <tr>
                                  <td class="text-center child-cell">
                                   state
                                  </td>
                                  <td class="text-center child-cell active">
                                    {{$details['data']['state']}}
                                  </td>
                                
                               </tr>
                   
                               <tr>
                                  <td class="text-center child-cell">
                                   method of payment
                                  </td>
                                  <td class="text-center child-cell active">
                                    {{$details['data']['payer']['payment_method']}}
                                  </td>
                                
                               </tr>
                   
                               <tr>
                                  <td class="text-center child-cell">
                                   status
                                  </td>
                                  <td class="text-center child-cell active">
                                    {{$details['data']['payer']['status']}}
                                  </td>
                                
                               </tr>
                         
                         
                             
                               @foreach ($details['data']['payer']['payer_info'] as $keys=>$vals)
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
                   
                                   @foreach ($details['data']['payer']['payer_info']['shipping_address'] as $keyss=>$valss)
                                   <tr>
                                      <td class="text-center child-cell">
                                       {{$keyss}}
                                      </td>
                                      <td class="text-center child-cell active">
                                        {{$valss}}
                                      </td>
                                    
                                   </tr>
                                   @endforeach
                   
                                   
                             
                               @foreach ($details['data']['transactions'][0]['amount'] as $keys=>$vals)
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
                   
                   
                                   @foreach ($details['data']['transactions'][0]['amount']['details'] as $keys=>$vals)
                                  
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
                                          {{$details['data']['transactions'][0]['amount']['total']}}&nbsp;
                                          {{$details['data']['transactions'][0]['amount']['currency']}}
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
                                      {{$details['data']['transactions'][0]['amount']['details']['subtotal']}}&nbsp;
                                      {{$details['data']['transactions'][0]['amount']['currency']}}
                                    </td>                            
                                 </tr>
                   
                                 
                            
                                 <tr>
                                  <td class="text-center child-cell">
                                   Total
                                  </td>
                                  <td class="text-center child-cell active">
                                    {{$details['data']['transactions'][0]['amount']['details']['subtotal']}}&nbsp;
                                    {{$details['data']['transactions'][0]['amount']['currency']}}
                                  </td>                            
                               </tr>
                   
                               
                            
                               <tr>
                                <td class="text-center child-cell">
                                  shipping
                                </td>
                                <td class="text-center child-cell active">
                                  {{$details['data']['transactions'][0]['amount']['details']['shipping']}}&nbsp;
                                  {{$details['data']['transactions'][0]['amount']['currency']}}
                                </td>                            
                             </tr>
                   
                             
                             <tr>
                              <td class="text-center child-cell">
                                insurance
                              </td>
                              <td class="text-center child-cell active">
                                {{$details['data']['transactions'][0]['amount']['details']['insurance']}}&nbsp;
                                {{$details['data']['transactions'][0]['amount']['currency']}}
                              </td>                            
                           </tr>
                   
                           
                   
                             
                           <tr>
                            <td class="text-center child-cell">
                              Handling Fee
                            </td>
                            <td class="text-center child-cell active">
                              {{$details['data']['transactions'][0]['amount']['details']['handling_fee']}}&nbsp;
                              {{$details['data']['transactions'][0]['amount']['currency']}}
                            </td>                            
                         </tr>
                   
                         
                             
                         <tr>
                          <td class="text-center child-cell">
                            Shipping Fee
                          </td>
                          <td class="text-center child-cell active">
                            {{$details['data']['transactions'][0]['amount']['details']['shipping_discount']}}&nbsp;
                            {{$details['data']['transactions'][0]['amount']['currency']}}
                          </td>                            
                       </tr>
                   
                       
                             
                       <tr>
                        <td class="text-center child-cell">
                          Discount
                        </td>
                        <td class="text-center child-cell active">
                          {{$details['data']['transactions'][0]['amount']['details']['discount']}}&nbsp;
                          {{$details['data']['transactions'][0]['amount']['currency']}}
                        </td>                            
                     </tr>
                   
                   <tr>
                      <td class="text-center child-cell">
                        Item Detail
                      </td>
                      <td class="text-center child-cell active">
                      
                      </td>                            
                   </tr>
                   
                    @foreach ($details['data']['transactions'][0]['item_list']['items'][0] as $key=>$val)
                          
                         
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
                    
                   
                   
                        @foreach ($details['data']['transactions'][0]['item_list']['shipping_address'] as $key=>$val)
                          
                         
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
                                  {{$details['data']['cart']}}
                                </td>                            
                             </tr>
                         
                   
                   
                           </tbody>
													</table>
												
													<div class="spacer_block block-8" style="height:70px;line-height:70px;font-size:1px;">&#8202;</div>
												</td>
											</tr>
										</tbody>
									</table>
								</td>
							</tr>
						</tbody>
					</table>
			
			
				
					<table class="row row-6" align="center" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
						<tbody>
							<tr>
								<td>
									<table class="row-content stack" align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000; width: 680px; margin: 0 auto;" width="680">
										<tbody>
											<tr>
												<td class="column column-1" width="41.666666666666664%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; padding-bottom: 5px; padding-top: 5px; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;">
													<div class="spacer_block block-1 mobile_hide" style="height:50px;line-height:50px;font-size:1px;">&#8202;</div>
												
												
													
													<div class="spacer_block block-6" style="height:30px;line-height:30px;font-size:1px;">&#8202;</div>
												</td>
												<td class="column column-2" width="58.333333333333336%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; padding-bottom: 5px; padding-top: 5px; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;">
													<table class="image_block block-1" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
														<tr>
															<td class="pad" style="width:100%;padding-right:0px;padding-left:0px;">
																<div class="alignment" align="center" style="line-height:10px"><a href="www.example.com" target="_blank" style="outline:none" tabindex="-1"><img class="fullWidth" src="https://d1oco4z2z1fhwp.cloudfront.net/templates/default/2006/headphone_black.png" style="display: block; height: auto; border: 0; max-width: 396.6666666666667px; width: 100%;" width="396.6666666666667" alt="Black Headphone" title="Black Headphone"></a></div>
															</td>
														</tr>
													</table>
												</td>
											</tr>
										</tbody>
									</table>
								</td>
							</tr>
						</tbody>
					</table>
					<table class="row row-7" align="center" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
						<tbody>
							<tr>
								<td>
									<table class="row-content stack" align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000; width: 680px; margin: 0 auto;" width="680">
										<tbody>
											<tr>
												<td class="column column-1" width="100%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; padding-bottom: 5px; padding-top: 5px; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;">
													<div class="spacer_block block-1" style="height:50px;line-height:50px;font-size:1px;">&#8202;</div>
													<table class="image_block block-2" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
														<tr>
															<td class="pad" style="width:100%;padding-right:0px;padding-left:0px;">
																<div class="alignment" align="center" style="line-height:10px"><a href="www.example.com" target="_blank" style="outline:none" tabindex="-1"><img class="fullWidth" src="https://d1oco4z2z1fhwp.cloudfront.net/templates/default/2006/View_All_Items_1.png" style="display: block; height: auto; border: 0; max-width: 612px; width: 100%;" width="612" alt="View All Items" title="View All Items"></a></div>
															</td>
														</tr>
													</table>
													<div class="spacer_block block-3" style="height:55px;line-height:55px;font-size:1px;">&#8202;</div>
												</td>
											</tr>
										</tbody>
									</table>
								</td>
							</tr>
						</tbody>
					</table>
					<table class="row row-8" align="center" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #0b111f;">
						<tbody>
							<tr>
								<td>
									<table class="row-content stack" align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000; width: 680px; margin: 0 auto;" width="680">
										<tbody>
											<tr>
												<td class="column column-1" width="50%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; padding-bottom: 5px; padding-top: 5px; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;">
													<table class="paragraph_block block-1" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;">
														<tr>
															<td class="pad" style="padding-bottom:10px;padding-left:20px;padding-right:10px;padding-top:25px;">
																<div style="color:#ffffff;font-family:Open Sans, Helvetica Neue, Helvetica, Arial, sans-serif;font-size:16px;line-height:150%;text-align:left;mso-line-height-alt:24px;">
																	<p style="margin: 0; word-break: break-word;"><strong><span>Download free </span></strong><strong><span>mobile application</span></strong></p>
																</div>
															</td>
														</tr>
													</table>
												</td>
												<td class="column column-2" width="25%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; padding-bottom: 5px; padding-top: 5px; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;">
													<table class="image_block block-1" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
														<tr>
															<td class="pad" style="padding-bottom:10px;padding-left:20px;padding-right:10px;padding-top:15px;width:100%;">
																<div class="alignment" align="left" style="line-height:10px"><a href="www.example.com" target="_blank" style="outline:none" tabindex="-1"><img src="https://d1oco4z2z1fhwp.cloudfront.net/templates/default/2006/App_Store_Badge_US_Black.png" style="display: block; height: auto; border: 0; max-width: 140px; width: 100%;" width="140" alt="App Store Badge" title="App Store Badge"></a></div>
															</td>
														</tr>
													</table>
												</td>
												<td class="column column-3" width="25%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; padding-bottom: 5px; padding-top: 5px; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;">
													<table class="image_block block-1" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
														<tr>
															<td class="pad" style="padding-bottom:10px;padding-left:20px;padding-right:10px;padding-top:15px;width:100%;">
																<div class="alignment" align="left" style="line-height:10px"><a href="www.example.com" target="_blank" style="outline:none" tabindex="-1"><img src="https://d1oco4z2z1fhwp.cloudfront.net/templates/default/2006/Google_Play_Badge_US.png" style="display: block; height: auto; border: 0; max-width: 140px; width: 100%;" width="140" alt="Google Play Badge" title="Google Play Badge"></a></div>
															</td>
														</tr>
													</table>
												</td>
											</tr>
										</tbody>
									</table>
								</td>
							</tr>
						</tbody>
					</table>
					<table class="row row-9" align="center" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #0b111f;">
						<tbody>
							<tr>
								<td>
									<table class="row-content stack" align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000; width: 680px; margin: 0 auto;" width="680">
										<tbody>
											<tr>
												<td class="column column-1" width="100%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; padding-bottom: 5px; padding-top: 5px; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;">
													<div class="spacer_block block-1" style="height:45px;line-height:45px;font-size:1px;">&#8202;</div>
												</td>
											</tr>
										</tbody>
									</table>
								</td>
							</tr>
						</tbody>
					</table>
					<table class="row row-10" align="center" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #0b111f;">
						<tbody>
							<tr>
								<td>
									<table class="row-content stack" align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000; width: 680px; margin: 0 auto;" width="680">
										<tbody>
											<tr>
												<td class="column column-1" width="50%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;">
													<table class="paragraph_block block-1" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;">
														<tr>
															<td class="pad" style="padding-left:25px;padding-right:10px;padding-top:10px;">
																<div style="color:#ffffff;font-family:Open Sans, Helvetica Neue, Helvetica, Arial, sans-serif;font-size:12px;line-height:120%;text-align:left;mso-line-height-alt:14.399999999999999px;">
																	<p style="margin: 0; word-break: break-word;"><span>&nbsp;</span></p>
																</div>
															</td>
														</tr>
													</table>
													<table class="paragraph_block block-2" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;">
														<tr>
															<td class="pad" style="padding-bottom:10px;padding-left:25px;padding-right:10px;">
																<div style="color:#ffffff;font-family:Open Sans, Helvetica Neue, Helvetica, Arial, sans-serif;font-size:18px;line-height:120%;text-align:left;mso-line-height-alt:21.599999999999998px;">
																	<p style="margin: 0; word-break: break-word;"><strong><span style="color:#ffffff;">Social media</span></strong></p>
																</div>
															</td>
														</tr>
													</table>
													<table class="paragraph_block block-3" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;">
														<tr>
															<td class="pad" style="padding-bottom:10px;padding-left:25px;padding-right:10px;padding-top:10px;">
																<div style="color:#C0C0C0;font-family:Open Sans, Helvetica Neue, Helvetica, Arial, sans-serif;font-size:12px;line-height:150%;text-align:left;mso-line-height-alt:18px;">
																	<p style="margin: 0; word-break: break-word;"><span>&nbsp;</span></p>
																	<p style="margin: 0; word-break: break-word;"><span style="color:#C0C0C0;">Stay up-to-date with current activities and future events by following us on your favorite social media channels.</span></p>
																</div>
															</td>
														</tr>
													</table>
													<div class="spacer_block block-4" style="height:20px;line-height:20px;font-size:1px;">&#8202;</div>
													<table class="social_block block-5" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
														<tr>
															<td class="pad" style="padding-left:20px;text-align:left;padding-right:0px;">
																<div class="alignment" align="left">
																	<table class="social-table" width="126px" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; display: inline-block;">
																		<tr>
																			<td style="padding:0 10px 0 0;"><a href="https://www.facebook.com" target="_blank"><img src="https://app-rsrc.getbee.io/public/resources/social-networks-icon-sets/t-only-logo-white/facebook@2x.png" width="32" height="32" alt="Facebook" title="Facebook" style="display: block; height: auto; border: 0;"></a></td>
																			<td style="padding:0 10px 0 0;"><a href="https://www.twitter.com" target="_blank"><img src="https://app-rsrc.getbee.io/public/resources/social-networks-icon-sets/t-only-logo-white/twitter@2x.png" width="32" height="32" alt="Twitter" title="Twitter" style="display: block; height: auto; border: 0;"></a></td>
																			<td style="padding:0 10px 0 0;"><a href="https://www.instagram.com" target="_blank"><img src="https://app-rsrc.getbee.io/public/resources/social-networks-icon-sets/t-only-logo-white/instagram@2x.png" width="32" height="32" alt="Instagram" title="Instagram" style="display: block; height: auto; border: 0;"></a></td>
																		</tr>
																	</table>
																</div>
															</td>
														</tr>
													</table>
													<div class="spacer_block block-6" style="height:20px;line-height:20px;font-size:1px;">&#8202;</div>
												</td>
												<td class="column column-2" width="50%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;">
													<table class="paragraph_block block-1" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;">
														<tr>
															<td class="pad" style="padding-left:25px;padding-right:10px;padding-top:10px;">
																<div style="color:#ffffff;font-family:Open Sans, Helvetica Neue, Helvetica, Arial, sans-serif;font-size:12px;line-height:120%;text-align:left;mso-line-height-alt:14.399999999999999px;">
																	<p style="margin: 0; word-break: break-word;"><span>&nbsp;</span></p>
																</div>
															</td>
														</tr>
													</table>
													<table class="paragraph_block block-2" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;">
														<tr>
															<td class="pad" style="padding-bottom:10px;padding-left:25px;padding-right:10px;">
																<div style="color:#ffffff;font-family:Open Sans, Helvetica Neue, Helvetica, Arial, sans-serif;font-size:18px;line-height:120%;text-align:left;mso-line-height-alt:21.599999999999998px;">
																	<p style="margin: 0; word-break: break-word;"><strong><span style="color:#ffffff;">Where to find us</span></strong></p>
																</div>
															</td>
														</tr>
													</table>
													<table class="paragraph_block block-3" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;">
														<tr>
															<td class="pad" style="padding-bottom:10px;padding-left:25px;padding-right:10px;padding-top:10px;">
																<div style="color:#C0C0C0;font-family:Open Sans, Helvetica Neue, Helvetica, Arial, sans-serif;font-size:12px;line-height:150%;text-align:left;mso-line-height-alt:18px;">
																	<p style="margin: 0; word-break: break-word;"><span style="color:#C0C0C0;"><a style="text-decoration: none; color: #C0C0C0;" href="http://www.example.com" target="_blank" rel="noopener">www.company.com</a></span><span style="color:#C0C0C0;">Company address here<br>00358 123 123 123</span></p>
																</div>
															</td>
														</tr>
													</table>
													<div class="spacer_block block-4 mobile_hide" style="height:10px;line-height:10px;font-size:1px;">&#8202;</div>
													<div class="spacer_block block-5" style="height:20px;line-height:20px;font-size:1px;">&#8202;</div>
													<table class="paragraph_block block-6" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;">
														<tr>
															<td class="pad" style="padding-bottom:10px;padding-left:25px;padding-right:10px;padding-top:10px;">
																<div style="color:#C0C0C0;font-family:Open Sans, Helvetica Neue, Helvetica, Arial, sans-serif;font-size:12px;line-height:120%;text-align:left;mso-line-height-alt:14.399999999999999px;">
																	<p style="margin: 0; word-break: break-word;"><span style="color:#C0C0C0;">Changed your mind? <a style="text-decoration: underline; color: #C0C0C0;" href="http://www.example.com" target="_blank" rel="noopener">Unsubscribe</a> </span></p>
																</div>
															</td>
														</tr>
													</table>
												</td>
											</tr>
										</tbody>
									</table>
								</td>
							</tr>
						</tbody>
					</table>
					<table class="row row-11" align="center" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #0b111f;">
						<tbody>
							<tr>
								<td>
									<table class="row-content stack" align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000; width: 680px; margin: 0 auto;" width="680">
										<tbody>
											<tr>
												<td class="column column-1" width="100%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; padding-bottom: 5px; padding-top: 5px; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;">
													<div class="spacer_block block-1" style="height:45px;line-height:45px;font-size:1px;">&#8202;</div>
												</td>
											</tr>
										</tbody>
									</table>
								</td>
							</tr>
						</tbody>
					</table>
					<table class="row row-12" align="center" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff;">
						<tbody>
							<tr>
								<td>
									<table class="row-content stack" align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000; background-color: #fff; width: 680px; margin: 0 auto;" width="680">
										<tbody>
											<tr>
												<td class="column column-1" width="100%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; padding-bottom: 5px; padding-top: 5px; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;">
													<table class="icons_block block-1" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
														<tr>
															<td class="pad" style="vertical-align: middle; color: #1e0e4b; font-family: 'Inter', sans-serif; font-size: 15px; padding-bottom: 5px; padding-top: 5px; text-align: center;">
																<table width="100%" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
																	<tr>
																		<td class="alignment" style="vertical-align: middle; text-align: center;"><!--[if vml]><table align="left" cellpadding="0" cellspacing="0" role="presentation" style="display:inline-block;padding-left:0px;padding-right:0px;mso-table-lspace: 0pt;mso-table-rspace: 0pt;"><![endif]-->
																			<!--[if !vml]><!-->
																		
																		</td>
																	</tr>
																</table>
															</td>
														</tr>
													</table>
												</td>
											</tr>
										</tbody>
									</table>
								</td>
							</tr>
						</tbody>
					</table>
				</td>
			</tr>
		</tbody>
	</table><!-- End -->
</body>

</html>