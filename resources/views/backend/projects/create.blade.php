@extends('backend.layout.master')
@section('main-content')
@section('title1','Add New Project')
@section('title2','Add New Project')
<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">@yield('title1')</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="{{url('admin/dashboard')}}">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">@yield('title2')</li>
							</ol>
						</div>
					</div>
                    <!-- start widget -->
                    <div class="row">
						<div class="col-md-8 col-sm-12 offset-2">
							<div class="card card-box">
								<div class="card-header">
									<strong>Add New Event</strong>
								</div>
                                <form method="post" action="{{route('projects.store')}}" enctype="multipart/form-data">
								<div class="card-body " id="bar-parent">
									@csrf

                                        @if(LaravelLocalization::getCurrentLocale()=='en')
                                            <input type="hidden" name="language" value="English">
                                        @elseif(LaravelLocalization::getCurrentLocale()=='fa')
                                            <input type="hidden" name="language" value="Dari">
                                        @else
                                            <input type="hidden" name="language" value="Pashto">
                                        @endif
									<!-- <div class="form-group">
										<label>Select Event Type</label>
										<select class="form-control" name="type_id" required>
                                            <option value="" selected disabled>Select Event Type</option>
											<option value="{">kuckebi</option>
										</select>
									</div> -->
								<div class="row">
										<div class="form-group col-md-6">
											<label for="simpleFormPassword">Project Name</label>
											<input type="text" name="title" class="form-control" id="simpleFormPassword"
												placeholder="Enter Title">
                                        </div>
                                        <div class="form-group col-md-6 ">
                                            <label for="simpleFormPassword">Event Date</label>
                                            <input type="date" name="date" class="form-control"
                                                   placeholder="Chose date....">
                                        </div>
									</div>
                                        <label class="body">Event Description</label>
                                        <div class="form-group">
											<textarea name="body" id="summernote" cols="30" rows="5"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label class="image">Project Image</label>
                                            <input type="file" class="form-control" name="image">
                                        </div>
								</div>
                              <div class="card-footer">
                                  <center>
                                      <button type="submit" class="btn btn-md btn-primary">Save</button>

                                  </center>

                              </div>

                                </form>
							</div>
						</div>
					</div>

				</div>
			</div>



@stop
