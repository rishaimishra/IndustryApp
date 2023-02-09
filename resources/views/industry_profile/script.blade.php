<script type="text/javascript">
	$(document).ready(function(){
		var business_type = 'csi_manufacturing';
		if(business_type=="csi_manufacturing")
		{	
			
		    $('#csi_manufacturing_business_status').on('change',function(){
				
				var business_status= $('#csi_manufacturing_business_status').val();
				if(business_status=="op"){
					$('.csi_manufacturing_operational').css('display','block');
					$('.csi_manufacturing_non_operational').css('display','none');
					$('.csi_manufacturing_under_construction').css('display','none');
					$('.csi_manufacturing_not_commenced').css('display','none');


					$('.csi_manufacturing_operational :input').prop("disabled", false);
					$('.csi_manufacturing_non_operational :input').prop("disabled", true);
					$('.csi_manufacturing_under_construction :input').prop("disabled", true);
					$('.csi_manufacturing_not_commenced :input').prop("disabled", true);

				}

				if(business_status=="nop"){
					$('.csi_manufacturing_operational').css('display','none');
					$('.csi_manufacturing_non_operational').css('display','block');
					$('.csi_manufacturing_under_construction').css('display','none');
					$('.csi_manufacturing_not_commenced').css('display','none');

					$('.csi_manufacturing_non_operational :input').prop("disabled", false);
					$('.csi_manufacturing_operational :input').prop("disabled", true);
					$('.csi_manufacturing_under_construction :input').prop("disabled", true);
					$('.csi_manufacturing_not_commenced :input').prop("disabled", true);

				}

				if(business_status=="uc"){
					$('.csi_manufacturing_operational').css('display','none');
					$('.csi_manufacturing_non_operational').css('display','none');
					$('.csi_manufacturing_under_construction').css('display','block');
					$('.csi_manufacturing_not_commenced').css('display','none');

					$('.csi_manufacturing_under_construction :input').prop("disabled", false);
					$('.csi_manufacturing_operational :input').prop("disabled", true);
					$('.csi_manufacturing_non_operational :input').prop("disabled", true);
					$('.csi_manufacturing_not_commenced :input').prop("disabled", true);

				}

				if(business_status=="bnc"){
					$('.csi_manufacturing_operational').css('display','none');
					$('.csi_manufacturing_non_operational').css('display','none');
					$('.csi_manufacturing_under_construction').css('display','none');
					$('.csi_manufacturing_not_commenced').css('display','block');

					$('.csi_manufacturing_not_commenced :input').prop("disabled", false);
					$('.csi_manufacturing_operational :input').prop("disabled", true);
					$('.csi_manufacturing_non_operational :input').prop("disabled", true);
					$('.csi_manufacturing_under_construction :input').prop("disabled", true);

				}

			})

			
			



			



			// none and disabled
			$('.csi_service_parent').css("display", 'none');
			$('.csi_contract_parent').css("display", 'none');
			$(".csi_service_parent :input").prop("disabled", true);
			$('.csi_contract_parent :input').prop("disabled", true);

		}else{

		}
	})
</script>