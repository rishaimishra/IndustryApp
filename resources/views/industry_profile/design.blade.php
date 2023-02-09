<div class="csi_parent">


									



								<div class="csi_manufacturing_div">	
									<div class="form-group rm03">
										<label for="title">Business Status csi_manufacturing</label>
										<select class="form-control" name="csi_manufacturing_business_status" id="csi_manufacturing_business_status" class="csi_manufacturing_business_status">
										<option value="">Select Status</option>
										<option value="op">Operational</option>
										<option value="nop">Non Operational</option>
										<option value="uc">Under Construction</option>
										<option value="bnc">Business Not Commenced</option>
										</select>
									</div>




									<div class="csi_manufacturing_operational" style="display:none">
									

									<div class="form-group rm03">
										<label for="title">Date of Commercial Commencement</label>
										<input type="date"  class="form-control"  placeholder="Enter email."  name="csi_manufacturing_date_of_commercial" >
									</div>

									<div class="form-group rm03">
										<label for="title">Installed Production Capacity</label>
										<input type="text"  class="form-control"  placeholder="Enter Installed Production Capacity."  name="csi_manufacturing_installer_production_capacity" >
									</div>

									<div class="form-group rm03">
										<label for="title">Total Investment Till Date (Nu in Millions)</label>
										<input type="text"  class="form-control"  placeholder="Enter Total Investment Till Date (Nu in Millions)."  name="csi_manufacturing_total_investment" >
									</div>
									
									</div>


									<div class="csi_manufacturing_non_operational" style="display:none">
									

									<div class="form-group rm03">
										<label for="title">Date Since Not Operational</label>
										<input type="date"  class="form-control"  placeholder="Enter email."  name="csi_manufacturing_date_of_commercial" >
									</div>


									<div class="form-group rm03">
										<label for="title">Reason</label>
										<textarea class="form-control" name="csi_manufacturing_specify" ></textarea>
									</div>

									<div class="form-group rm03">
										<label for="title">Installed Production Capacity</label>
										<input type="text"  class="form-control"  placeholder="Enter Installed Production Capacity."  name="csi_manufacturing_installer_production_capacity" >
									</div>

									<div class="form-group rm03">
										<label for="title">Total Investment Till Date (Nu in Millions)</label>
										<input type="text"  class="form-control"  placeholder="Enter Total Investment Till Date (Nu in Millions)."  name="csi_manufacturing_total_investment" >
									</div>

								</div>



								<div class="csi_manufacturing_under_construction" style="display:none">
									

									<div class="form-group rm03">
										<label for="title">Expected Date / year of Commercial Business Commencement</label>
										<input type="date"  class="form-control"  placeholder="Enter email."  name="csi_manufacturing_date_of_commercial" >
									</div>


									
									<div class="form-group rm03">
										<label for="title">Installed Production Capacity</label>
										<input type="text"  class="form-control"  placeholder="Enter Installed Production Capacity."  name="csi_manufacturing_installer_production_capacity" >
									</div>

									<div class="form-group rm03">
										<label for="title">Total Investment Till Date (Nu in Millions)</label>
										<input type="text"  class="form-control"  placeholder="Enter Total Investment Till Date (Nu in Millions)."  name="csi_manufacturing_total_investment" >
									</div>

								</div>


								<div class="csi_manufacturing_not_commenced" style="display:none">
									

									<div class="form-group rm03">
										<label for="title">Expected Date / year of Commercial Business Commencement</label>
										<input type="date"  class="form-control"  placeholder="Enter email."  name="csi_manufacturing_date_of_commercial" >
									</div>


									
									<div class="form-group rm03">
										<label for="title">Installed Production Capacity</label>
										<input type="text"  class="form-control"  placeholder="Enter Installed Production Capacity."  name="csi_manufacturing_installer_production_capacity" >
									</div>

									<div class="form-group rm03">
										<label for="title">Total Investment Till Date (Nu in Millions)</label>
										<input type="text"  class="form-control"  placeholder="Enter Total Investment Till Date (Nu in Millions)."  name="csi_manufacturing_total_investment" >
									</div>

								</div>
						</div>

							





							{{-- csi-services --}}

							<div class="csi_service_parent" id="csi_service_parent">

								<div class="form-group rm03">
										<label for="title">Business Status</label>
										<select class="form-control" name="csi_services_business_status" id="role_id">
										<option value="">Select Status</option>
										<option value="op">Operational</option>
										<option value="oth">Others</option>
										</select>
								</div>


								<div class="csi_service_operational">
									

									<div class="form-group rm03">
										<label for="title">Date of Commercial Commencement</label>
										<input type="date"  class="form-control"  placeholder="Enter email."  name="csi_service_date_of_commercial" >
									</div>

									<div class="form-group rm03">
										<label for="title">Total Investment Till Date (Nu in Millions)</label>
										<input type="text"  class="form-control"  placeholder="Enter Total Investment Till Date (Nu in Millions)."  name="csi_service_total_investment" >
									</div>
									
							   </div>


							   <div class="csi_service_other">
									

									<div class="form-group rm03">
										<label for="title">Expected Date of Commercial Commencement</label>
										<input type="date"  class="form-control"  placeholder="Enter email."  name="csi_service_date_of_commercial" >
									</div>

									<div class="form-group rm03">
										<label for="title">Reason</label>
										<textarea class="form-control" name="csi_manufacturing_specify"></textarea>
									</div>

									<div class="form-group rm03">
										<label for="title">Total Investment Till Date (Nu in Millions)</label>
										<input type="text"  class="form-control"  placeholder="Enter Total Investment Till Date (Nu in Millions)."  name="csi_service_total_investment" >
									</div>
									
							   </div>


							</div>


							{{-- csi-contract --}}
							<div class="csi_contract_parent">

								<div class="form-group rm03">
										<label for="title">Business Status</label>
										<select class="form-control" name="csi_contract_business_status" id="role_id">
										<option value="">Select Status</option>
										<option value="op">Operational</option>
										<option value="oth">Others</option>
										</select>
								</div>


								<div class="csi_service_operational">
									

									<div class="form-group rm03">
										<label for="title">Date of Commercial Commencement</label>
										<input type="date"  class="form-control"  placeholder="Enter email."  name="csi_contract_date_of_commercial" >
									</div>

									<div class="form-group rm03">
										<label for="title">Total Investment Till Date (Nu in Millions)</label>
										<input type="text"  class="form-control"  placeholder="Enter Total Investment Till Date (Nu in Millions)."  name="csi_contract_total_investment" >
									</div>
									
							   </div>


							   <div class="csi_service_other">
									

									<div class="form-group rm03">
										<label for="title">Expected Date of Commercial Commencement</label>
										<input type="date"  class="form-control"  placeholder="Enter email."  name="csi_contract_date_of_commercial" >
									</div>

									<div class="form-group rm03">
										<label for="title">Reason</label>
										<textarea class="form-control" name="csi_contract_specify"></textarea>
									</div>

									<div class="form-group rm03">
										<label for="title">Total Investment Till Date (Nu in Millions)</label>
										<input type="text"  class="form-control"  placeholder="Enter Total Investment Till Date (Nu in Millions)."  name="csi_contract_total_investment" >
									</div>
									
							   </div>


							</div>

							</div>












{{-- <div class="ml_parent">

								<div class="ml_pam_div">
									

									<div class="form-group rm03">
										<label for="title">Business Status</label>
										<select class="form-control" name="ml_pam_business_status" id="role_id">
										<option value="">Select Status</option>
										<option value="D">Operational</option>
										<option value="S">Non Operational</option>
										<option value="C">Under Construction</option>
										<option value="F">Business Not Commenced</option>
										</select>
									</div>


									<div class="csi_manufacturing_operational">
									

									<div class="form-group rm03">
										<label for="title">Date of Commercial Commencement</label>
										<input type="date"  class="form-control"  placeholder="Enter email."  name="ml_pam_date_of_commercial" >
									</div>

									<div class="form-group rm03">
										<label for="title">Installed Production Capacity</label>
										<input type="text"  class="form-control"  placeholder="Enter Installed Production Capacity."  name="ml_pam_installer_production_capacity" >
									</div>

									<div class="form-group rm03">
										<label for="title">Total Investment Till Date (Nu in Millions)</label>
										<input type="text"  class="form-control"  placeholder="Enter Total Investment Till Date (Nu in Millions)."  name="ml_pam_total_investment" >
									</div>
									
									</div>


									<div class="csi_manufacturing_non_operational">
									

									<div class="form-group rm03">
										<label for="title">Date Since Not Operational</label>
										<input type="date"  class="form-control"  placeholder="Enter email."  name="ml_pam_date_of_commercial" >
									</div>


									<div class="form-group rm03">
										<label for="title">Reason</label>
										<textarea class="form-control" name="ml_pam_specify"></textarea>
									</div>

									<div class="form-group rm03">
										<label for="title">Installed Production Capacity</label>
										<input type="text"  class="form-control"  placeholder="Enter Installed Production Capacity."  name="ml_pam_installer_production_capacity" >
									</div>

									<div class="form-group rm03">
										<label for="title">Total Investment Till Date (Nu in Millions)</label>
										<input type="text"  class="form-control"  placeholder="Enter Total Investment Till Date (Nu in Millions)."  name="ml_pam_total_investment" >
									</div>

								</div>



								<div class="csi_manufacturing_under_construction">
									

									<div class="form-group rm03">
										<label for="title">Expected Date / year of Commercial Business Commencement</label>
										<input type="date"  class="form-control"  placeholder="Enter email."  name="ml_pam_date_of_commercial" >
									</div>


									
									<div class="form-group rm03">
										<label for="title">Installed Production Capacity</label>
										<input type="text"  class="form-control"  placeholder="Enter Installed Production Capacity."  name="ml_pam_installer_production_capacity" >
									</div>

									<div class="form-group rm03">
										<label for="title">Total Investment Till Date (Nu in Millions)</label>
										<input type="text"  class="form-control"  placeholder="Enter Total Investment Till Date (Nu in Millions)."  name="ml_pam_total_investment" >
									</div>

								</div>


								<div class="csi_manufacturing_not_commenced">
									

									<div class="form-group rm03">
										<label for="title">Expected Date / year of Commercial Business Commencement</label>
										<input type="date"  class="form-control"  placeholder="Enter email."  name="ml_pam_date_of_commercial" >
									</div>


									
									<div class="form-group rm03">
										<label for="title">Installed Production Capacity</label>
										<input type="text"  class="form-control"  placeholder="Enter Installed Production Capacity."  name="ml_pam_installer_production_capacity" >
									</div>

									<div class="form-group rm03">
										<label for="title">Total Investment Till Date (Nu in Millions)</label>
										<input type="text"  class="form-control"  placeholder="Enter Total Investment Till Date (Nu in Millions)."  name="ml_pam_total_investment" >
									</div>

								</div>

							</div>
						</div> --}}