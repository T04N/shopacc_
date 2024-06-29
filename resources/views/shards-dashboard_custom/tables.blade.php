@extends('shards-dashboard_custom.dashBoardLayout')
@section('title', 'Table')
@section('content')
<div class="row" style="margin-top: 70px;">
  <div class="col">
    <div class="card card-small mb-4">
      <div class="card-header border-bottom">
        <h6 class="m-0">Tài khoản</h6>
      </div>
      <div class="card-body p-0 pb-3 text-center table-responsive">
        <table class="table mb-0">
          <thead class="bg-light">
            <tr>
              <th scope="col" class="border-0">ID</th>
              <th scope="col" class="border-0">Tên người dùng</th>
              <th scope="col" class="border-0">Tagline</th>
              <th scope="col" class="border-0">Email</th>
              <th scope="col" class="border-0">Hạng hiện tại</th>
              <th scope="col" class="border-0">Agent đã mở khóa</th>
              <th scope="col" class="border-0">Số lượng skin</th>
              <th scope="col" class="border-0">Hành động</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>ValorMaster</td>
              <td>Master#1234</td>
              <td>valormaster@example.com</td>
              <td>Platinum 2</td>
              <td>Jett, Phoenix, Sage</td>
              <td>25</td>
              <td>
                <button class="btn btn-primary btn-sm">Chỉnh sửa</button>
                <button class="btn btn-danger btn-sm">Xóa</button>
              </td>
            </tr>
            <tr>
              <td>2</td>
              <td>AceShooter</td>
              <td>Ace#5678</td>
              <td>aceshooter@example.com</td>
              <td>Gold 3</td>
              <td>Brimstone, Sova, Reyna</td>
              <td>15</td>
              <td>
                <button class="btn btn-primary btn-sm">Chỉnh sửa</button>
                <button class="btn btn-danger btn-sm">Xóa</button>
              </td>
            </tr>
            <tr>
              <td>3</td>
              <td>SharpShooter</td>
              <td>Shooter#4321</td>
              <td>sharpshooter@example.com</td>
              <td>Diamond 1</td>
              <td>Omen, Cypher, Viper</td>
              <td>30</td>
              <td>
                <button class="btn btn-primary btn-sm">Chỉnh sửa</button>
                <button class="btn btn-danger btn-sm">Xóa</button>
              </td>
            </tr>
            <tr>
              <td>2</td>
              <td>AceShooter</td>
              <td>Ace#5678</td>
              <td>aceshooter@example.com</td>
              <td>Gold 3</td>
              <td>Brimstone, Sova, Reyna</td>
              <td>15</td>
              <td>
                <button class="btn btn-primary btn-sm">Chỉnh sửa</button>
                <button class="btn btn-danger btn-sm">Xóa</button>
              </td>
            </tr>
            <tr>
              <td>2</td>
              <td>AceShooter</td>
              <td>Ace#5678</td>
              <td>aceshooter@example.com</td>
              <td>Gold 3</td>
              <td>Brimstone, Sova, Reyna</td>
              <td>15</td>
              <td>
                <button class="btn btn-primary btn-sm">Chỉnh sửa</button>
                <button class="btn btn-danger btn-sm">Xóa</button>
              </td>
            </tr>
            <tr>
              <td>4</td>
              <td>EliteGamer</td>
              <td>Elite#8765</td>
              <td>elitegamer@example.com</td>
              <td>Silver 2</td>
              <td>Raze, Killjoy, Breach</td>
              <td>20</td>
              <td>
                <button class="btn btn-primary btn-sm">Chỉnh sửa</button>
                <button class="btn btn-danger btn-sm">Xóa</button>
              </td>
            </tr>
          </tbody>
        </table>
        
      </div>
    </div>
  </div>
</div>
@endsection

@push('styles')
<!-- Additional styles can be added here -->
@endpush

@push('scripts')
<!-- Additional scripts can be added here -->
@endpush


