<div class="offcanvas-header">
    <span class="header-text">Close</span>
    <button type="button" class="offcanvas-menu-btn menu-status-close offcanvas-close">
      <span class="menu-btn-icon">
                        <span></span>
      <span></span>
      <span></span>
      </span>
    </button>
</div>
<div class="offcanvas-content">
    <form class="box " action="{{route('admin.user.store')}}" method="POST" enctype="multipart/form-data">
        <h5 class="top-content">Tizimda ro'yxatdan o'tish uchun quyida ko'rsatilgan maydonlarni to'ldiring</h5>
        <div class="input-names">
            <input class="frist_name" type="text" name="first_name" placeholder="Ism" autocomplete="off" required>
            <input class="last_name" type="text" name="last_name" placeholder="Familya" autocomplete="off" required>
        </div>
        <input id="emailOrNumber" type="text" name="phone_or_email" placeholder="Email yoki telefon "
        autocomplete="off" required>
        
        <input id="datepicker" type="date" name="birth_date" autocomplete="off" required placeholder="kun/oy/yil"/>
        
        
        <div class="input-radio">
            <label for="gender">Jinsi:</label>
            <div class="d-flex-radio">
                <input type="radio" name="gender" id="gender"><label>Ayol</label>
                <input type="radio" name="gender" id="gender"><label>Erkak</label>
            </div>
        </div>
        <button type="submit" class="btnB btn-input">Ro'yxatdan o'tish</button>
    </form>
</div>