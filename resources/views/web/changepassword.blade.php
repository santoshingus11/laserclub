@extends('web.layouts.master')
@section('title', 'Change Password')
@section('content')
<div class="container-fluid mb-5">
    <div class="card bg-white">
        <div class="container mb-4">
  <h2 class="text-center mt-5">Change Password</h2>
  <div class="row justify-content-center">
    <div class="col-md-6 col-lg-4">
      <form class="mt-5">
        <div class="form-group">
          <label for="oldPassword">Old Password</label>
          <input type="password" class="form-control" id="oldPassword" placeholder="Enter old password">
        </div>
        <div class="form-group">
          <label for="newPassword">New Password</label>
          <input type="password" class="form-control" id="newPassword" placeholder="Enter new password">
        </div>
        <div class="form-group">
          <label for="confirmPassword">Confirm Password</label>
          <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm new password">
        </div>
        <button type="submit" class="btn btn-primary btn-block">Change Password</button>
      </form>
    </div>
  </div>
</div>

    </div>
</div>
@stop
 
