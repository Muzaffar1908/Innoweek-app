<div class="offcanvas-menu-wrap" id="offcanvas-wrap" data-position="right">
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

    <div class="tab-content">
      <h5 class="top-content">Tizimda ro'yxatdan o'tish uchun quyida ko'rsatilgan maydonlarni to'ldiring</h5>
      <div class="tab">
        <button class="tablinks" id="defaultOpen" onclick="openCity(event, 'res')">Resident</button>
        <button class="tablinks" onclick="openCity(event, 'nores')">No Resident</button>
      </div>
      
      <div id="res" class="tabcontent">
        <form class="box " action="./regpanel.html">
          <div class="input-names">
              <input class="name" type="text" placeholder="Ism" autocomplete="off" required>
              <input class="surname" type="text" placeholder="Familya" autocomplete="off" required>
          </div>
          <input id="emailOrNumber" type="text" name="email" placeholder="Email yoki telefon "
          autocomplete="off" required>
          
          <input class="form-control" type="datetime-local" autocomplete="off" required placeholder="kun/oy/yil"/>
          
          
          <div class="input-radio">
              <label for="gender">Jinsi:</label>
              <div class="d-flex-radio">
                  <input type="radio" name="Gender" id="gender"><label>Ayol</label>
                  <input type="radio" name="Gender" id="gender"><label>Erkak</label>
              </div>
          </div>
          <button type="submit" class="btnB btn-input">Ro'yxatdan o'tish</button>
      </form>
      </div>
      
      <div id="nores" class="tabcontent">
        <form class="box " action="./regpanel.html">
          <div class="input-names">
              <input class="name" type="text" placeholder="Ism" autocomplete="off" required>
              <input class="surname" type="text" placeholder="Familya" autocomplete="off" required>
          </div>
          <input id="emailOrNumber" type="text" name="email" placeholder="Email yoki telefon "
          autocomplete="off" required>

          <select name="country" id="country">
            <option value="1">Uzbekistan</option>
            <option value="2">Russia</option>
            <option value="3">Usa</option>
            <option value="4">Paris</option>
          </select>

          <select name="profesion" id="profesion">
            <option value="1">Director</option>
            <option value="2">Programmer</option>
            <option value="4">Engineer</option>
            <option value="5">Developer</option>
          </select>

          <input id="emailOrNumber" type="text" name="email" placeholder="Required"
          autocomplete="off" required>
          
          <input class="form-control" type="datetime-local" autocomplete="off" required placeholder="kun/oy/yil"/>

          <div class="input-radio">
            <label for="gender">Jinsi:</label>
            <div class="d-flex-radio">
                <input type="radio" name="Gender" id="gender"><label>Ayol</label>
                <input type="radio" name="Gender" id="gender"><label>Erkak</label>
            </div>
        </div>
          <button type="submit" class="btnB btn-input">Ro'yxatdan o'tish</button>
      </form> 
      </div>
    </div>


    </div>
  </div>
<div id="template-search" class="template-search">
    <button type="button" class="close">×</button>
    <form class="search-form">
        <input type="search" value="" placeholder="Search" />
        <button type="submit" class="search-btn btn-ghost style-1">
            <i class="fas fa-search"></i>
        </button>
    </form>
</div>