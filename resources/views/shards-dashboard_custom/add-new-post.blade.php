
@extends('shards-dashboard_custom.dashBoardLayout')
@section('title', 'Table')
@section('content')
<main class="main-content uploadMainContainer   col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">

    <div class="container mt-5 uploadContainer ">
      <img class="img_upload" src="/img/chammbar.png" alt="">
      <h2>Tải lên  tài khoản muốn bán</h2>
      <form id="accountForm" enctype="multipart/form-data">
        <div class="form-group">
          <label for="username">Tên người dùng:</label>
          <input type="text" class="form-control input_account" id="username" name="username" required>
        </div>
        <div class="form-group">
          <label for="tagline">Tagline:</label>
          <input type="text" class="form-control input_account" id="tagline" name="tagline" required>
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" class="form-control input_account" id="email" name="email" required>
        </div>
        <div class="form-group">
          <label for="currentRank">Hạng hiện tại:</label>
          <input type="text" class="form-control input_account" id="currentRank" name="currentRank" required>
        </div>
        <div class="form-group">
          <label for="unlockedAgents">Agent đã mở khóa:</label>
          <input type="text" class="form-control input_account" id="unlockedAgents" name="unlockedAgents" required>
        </div>
        <div class="form-group">
          <label for="skinCount">Số lượng skin:</label>
          <input type="number" class="form-control input_account" id="skinCount" name="skinCount" required>
        </div>
        <div class="form-group">
          <label for="uploadImage">Upload Ảnh:</label>
          <input type="file" class="form-control   input_account input_account-file" id="uploadImage" name="uploadImage" required>
        </div>
        <button type="submit" style="background-color: rgb(255, 69, 84); border: 2px solid white;" class="btn btn-primary">Submit</button>
      </form>

    </div>
  </main>
  @endsection

@push('styles')
<!-- Additional styles can be added here -->
@endpush

@push('scripts')
<!-- Additional scripts can be added here -->
@endpush

