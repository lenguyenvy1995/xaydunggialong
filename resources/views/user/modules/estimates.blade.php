<section id="estimates" class="pt-5 pb-5 bg-white text-dark">
    <div class="container">
        <h1 class="title-1"><span>dự đoán chi phí xây nhà</span></h1>
        <form class="row g-3 p-3 ">
         <div class="col-md-6">
           <label for="kinds" class="form-label">Chọn loại nhà</label>
           <select id="kinds" class="form-select">
             <option selected>nhà phố</option>
             <option>nhà cấp 4</option>
             <option>biệt thự</option>
           </select>
         </div>
         <div class="col-md-6">
           <label for="style" class="form-label">Các hình thức xây nhà</label>
           <select id="style" class="form-select">
             <option selected>xây nhà phần thô</option>
             <option>xây nhà trọn gói</option>
           </select>
         </div>
         <div class="col-md-6">
           <label for="width" class="form-label">Chiều rộng m<sup>2</sup></label>
           <input type="text" class="form-control" id="width" placeholder="nhập chiều rộng">
         </div>
         <div class="col-md-6">
           <label for="leight" class="form-label"> Chiều dài m<sup>2</sup></label>
           <input type="text" class="form-control" id="leight" placeholder="nhập chiều dài">
         </div>
         <div class="col-md-4">
           <label for="floors" class="form-label">Số tầng nhà</label>
           <select id="floors" class="form-select">
             <option selected>2</option>
             <option selected>3</option>
             <option selected>4</option>
             <option selected>5</option>
             <option selected>6</option>
           </select>
         </div>
         <div class="col-md-4">
           <label for="foudation" class="form-label">Chọn móng nhà</label>
           <select id="foudation" class="form-select">
             <option selected>Móng đài cọc</option>
             <option>Móng băng</option>
             <option>Móng đơn</option>
           </select>
         </div>
         <div class="col-md-4">Chọn mái nhà</label>
             <label for="roof" class="form-label">Chọn móng nhà</label>
             <select id="roof" class="form-select">
               <option selected>Mái bằng đúc BTCT</option>
               <option>Mái lợp tôn lạnh</option>
               <option selected>Mái mái xà gồ lợp ngói</option>
               <option selected>Mái đúc BTCT lợp ngói</option>
             </select>
         </div>
         <div class="col-md-12 text-center">
             <button type="submit" class="btn btn-primary">Tính kết quả</button>
           </div>
       </form>
    </div>
</section>