@extends('front.layout.front')
@section('title','Pricing -')
@section('style')
<style type="text/css">
	.clone{
		align-content: center;
    align-items: center;
    margin-left: 20%;
    width: 70%;
	}
</style>
@endsection
@section('content')
<header class="page header text-contrast overlay gradient gradient-purple-blue alpha-8 image-background cover" style="background-image: url('{!! asset('front/img/bg/waves.jpg') !!}')">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h1 class="display-4 text-contrast mb-4">Pricing</h1>
			</div>
		</div>
	</div>
</header>
<section class="section block bg-contrast">
   <div class="container bring-to-front border-top py-4 py-4">
      <div class="section-heading text-center">
         <div class="btn-group btn-group-toggle mt-5 pricing-table-basis" data-toggle="buttons"><label class="btn btn-primary"><input type="radio" name="pricing-basis" value="monthly" checked="checked"> Monthly</label> <label class="btn btn-primary active"><input type="radio" name="pricing-basis" value="yearly"> Yearly</label></div>
         <p class="text-muted">Pay annually and get 2 months free</p>
      </div>
      <div class="pricing-table pricing-table-table">
         <div class="d-md-none">
            <div class="btn-group btn-group-toggle pricing-table-tabs mb-3" data-toggle="buttons"><label class="btn btn-primary"><input type="radio" name="pricing-plan" value="1"> Free</label> <label class="btn btn-primary active" checked="checked"><input type="radio" name="pricing-plan" value="2"> Starter</label> <label class="btn btn-primary"><input type="radio" name="pricing-plan" value="3"> Power</label></div>
         </div>
         <div class="table-wrapper">
            <table class="table yearly-display">
               <thead class="expand-mobile">
                  <tr>
                     <th class="title text-left"><span class="hidden bold">Choose Your Plan</span></th>
                     <th id="ph-1" class="">
                        <p class="h4 pricing-title bold my-0">Free</p>
                        <p class="my-0">For individuals</p>
                     </th>
                     <th id="ph-2" class="visible-cell overflow-hidden position-relative">
                        <p class="h4 pricing-title bold my-0">Starter</p>
                        <p class="my-0">For small business</p>
                     </th>
                     <th id="ph-3" class="">
                        <p class="h4 pricing-title bold my-0">Power</p>
                        <p class="my-0">For large companies</p>
                     </th>
                  </tr>
               </thead>
               <tbody class="pricing-details">
                  <tr>
                     <th><span>Monthly price</span></th>
                     <td headers="ph-1" class="">
                        <div class="pricing">
                           <span class="pricing-value">
                              <span class="price text-dark odometer odometer-auto-theme" data-monthly="159" data-yearly="1299">
                                 <div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">159</span></span></span></span></span></div>
                              </span>
                           </span>
                        </div>
                     </td>
                     <td headers="ph-2" class="visible-cell">
                        <div class="pricing">
                           <span class="pricing-value">
                              <span class="price text-dark odometer odometer-auto-theme" data-monthly="24" data-yearly="1499">
                                 <div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">259</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">9</span></span></span></span></span></div>
                              </span>
                           </span>
                        </div>
                     </td>
                     <td headers="ph-3" class="">
                        <div class="pricing">
                           <span class="pricing-value">
                              <span class="price text-dark odometer odometer-auto-theme" data-monthly="99" data-yearly="1599">
                                 <div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">359</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">9</span></span></span></span></span></div>
                              </span>
                           </span>
                        </div>
                     </td>
                  </tr>
               </tbody>
               <tbody class="pricing-details">
                  <tr>
                     <th id="pc-1">Unlimited Space</th>
                     <td headers="ph-1 pc-1" class=""><i class="fas fa-times"></i></td>
                     <td headers="ph-2 pc-1" class="visible-cell"><i class="fas fa-check text-success"></i></td>
                     <td headers="ph-3 pc-1" class=""><i class="fas fa-check text-success"></i></td>
                  </tr>
                  <tr>
                     <th id="pc-2">Unlimited Themes and Styles</th>
                     <td headers="ph-1 pc-2" class=""><i class="fas fa-times"></i></td>
                     <td headers="ph-2 pc-2" class="visible-cell"><i class="fas fa-check text-success"></i></td>
                     <td headers="ph-3 pc-2" class=""><i class="fas fa-check text-success"></i></td>
                  </tr>
                  <tr>
                     <th id="pc-3">Customer Service</th>
                     <td headers="ph-1 pc-3" class=""><i class="fas fa-times"></i></td>
                     <td headers="ph-2 pc-3" class="visible-cell"><i class="fas fa-times"></i></td>
                     <td headers="ph-3 pc-3" class=""><i class="fas fa-check text-success"></i></td>
                  </tr>
                  <tr>
                     <th id="pc-4">Secure Online Transfer</th>
                     <td headers="ph-1 pc-4" class=""><i class="fas fa-check text-success"></i></td>
                     <td headers="ph-2 pc-4" class="visible-cell"><i class="fas fa-check text-success"></i></td>
                     <td headers="ph-3 pc-4" class=""><i class="fas fa-check text-success"></i></td>
                  </tr>
                  <tr>
                     <th id="pc-5">Sales Reports & Backup</th>
                     <td headers="ph-1 pc-5" class=""><i class="fas fa-check text-success"></i></td>
                     <td headers="ph-2 pc-5" class="visible-cell"><i class="fas fa-check text-success"></i></td>
                     <td headers="ph-3 pc-5" class=""><i class="fas fa-check text-success"></i></td>
                  </tr>
               </tbody>
               <tbody class="expand-mobile">
                  <tr>
                     <td class="text-left">Prices don't include tax.</td>
                     <td headers="ph-1 " class=""><a href="javascript:;" class="btn btn-rounded btn-success">Get Starter Plan</a></td>
                     <td headers="ph-2 " class="visible-cell"><a href="javascript:;" class="btn btn-rounded btn-success">Get Business Plan</a></td>
                     <td headers="ph-3 " class=""><a href="javascript:;" class="btn btn-rounded btn-success">Get Executive Plan</a></td>
                  </tr>
               </tbody>
               <tfoot>
                  <tr>
                     <td colspan="4">
                        <p class="pricing-disclaimer"><span class="bold">15-day money-back guarantee.</span> If you're not 100% satisfied, we'll give you your money back.</p>
                     </td>
                  </tr>
               </tfoot>
            </table>
         </div>
      </div>
   </div>
</section>
@endsection