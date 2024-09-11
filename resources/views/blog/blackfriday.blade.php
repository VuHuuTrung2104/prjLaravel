<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    />
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <title>Document</title>
  </head>
  <body>
    @include('includes.header')
    <div class="distance"></div>

    <div class="container">
      <h1 class="d-flex justify-content-center mb-5">blog</h1>
      <p
        style="
          color: #565656;
          font-size: 15px;
          background-color: #fafafa;
          padding: 10px;
          margin-bottom: 50px;
        "
      >
        <a style="text-decoration: none; color: #565656" href="/home">Trang chủ</a> /
        <a style="text-decoration: none; color: #565656" href="/blog"
          >Blog</a
        >

        ⚡️ mua càng nhiều – giảm càng đã ⚡️
      </p>
      <h2>
        ⚡️ mua càng nhiều – giảm càng đã ⚡️
      </h2>
      <br />

          <h5
            style="
              font-family: 'Courier New', Courier, monospace;
              font-size: 16px;
              margin-bottom: 50px;
              line-height: 1;
            "
          >

          <p>BLACK FRIDAY năm nay của XXIV có gì?</p>
          <p>Chắc chắn một dịp lễ lớn cho dân sành shopping thì đây là dịp lớn nhất để rinh về deal hời đúng không. Thế nên chúng tôi mang đến một ưu đãi cực lớn, một chương trình giảm giá sâu cho tất cả các sản phẩm. Cụ thể như sau:</p>
          <p>

              ⚡️Mua 1 sản phẩm – GIẢM NGAY 100K. Với khách hàng mua trực tiếp trên Website, vui lòng nhập mã BLACKFRIDAY01. <br>
              ⚡️Mua 2 sản phẩm – GIẢM NGAY 300K. Với khách hàng mua trực tiếp trên Website, vui lòng nhập mã BLACKFRIDAY02.<br>
              ⚡️Mua 3 sản phẩm – GIẢM NGAY 600K. Với khách hàng mua trực tiếp trên Website, vui lòng nhập mã BLACKFRIDAY03.<br>
          </p>
        </h5>
        <div>
            <img class="d-flex m-auto mb-5 " style="width: 800px;" src="https://xxivstore.com/wp-content/uploads/2023/11/Chuong-trinh-Black-Friday-XXIV-2.jpg" alt="">
        </div>
      <h4>bài viết liên quan</h4>
      <div
        style="width: 98%; border-top: 0.5px solid #565656; margin-bottom: 50px"
      ></div>

      <div class="d-flex flex-wrap col-12 gap-3">
        <a href="{{ url('/blog/lightblue') }}" style="text-decoration: none" class="col-2">
          <div>
            <img
              class="object-fit-none"
              height="150px"
              width="98%"
              src="https://xxivstore.com/wp-content/themes/yootheme/cache/c7/XXiV-Review-Light-Blue-Forever-c78358f4.webp"
              alt=""
            />
          </div>
          <p
            style="
              font-size: 15px;
              font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial,
                sans-serif;
            "
          >
            Light Blue Forever Pour Homme, phiên bản hay nhất của Light Blue cho
            nam
          </p>
        </a>
        <a href="{{ url('/blog/nasomattoblack') }}" style="text-decoration: none" class="col-2">
          <div>
            <img
              class="object-fit-none"
              height="150px"
              width="98%"
              src="https://xxivstore.com/wp-content/themes/yootheme/cache/a2/XXIV-Review-Black-Afgano-a2214809.webp"
              alt=""
            />
          </div>
          <p
            style="
              font-size: 15px;
              font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial,
                sans-serif;
            "
          >
            Nasomatto Black Afgano và trải nghiệm mùi cần sa trong thế giới nước
            hoa
          </p>
        </a>
        <a href="{{ url('/blog/blackfriday') }}" style="text-decoration: none" class="col-2">
          <div>
            <img
              class="object-fit-none"
              height="150px"
              width="98%"
              src="https://xxivstore.com/wp-content/themes/yootheme/cache/87/Chuong-trinh-black-friday-xxiv-store-8700478b.webp"
              alt=""
            />
          </div>
          <p
            style="
              font-size: 15px;
              font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial,
                sans-serif;
            "
          >
            ⚡️ MUA CÀNG NHIỀU – GIẢM CÀNG ĐÃ ⚡️
          </p>
        </a>
        <a href="{{ url('/blog/perfumebar') }}" style="text-decoration: none" class="col-2">
          <div>
            <img
              class="object-fit-none"
              height="150px"
              width="98%"
              src="https://xxivstore.com/wp-content/themes/yootheme/cache/20/Sieu-sale-sinh-nhat-XXIV-Store-20b5e727.webp"
              alt=""
            />
          </div>
          <p
            style="
              font-size: 15px;
              font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial,
                sans-serif;
            "
          >
            BIRTHDAY SALE – XXIV PERFUME BAR TURNING 3!
          </p>
        </a>
        <a href="{{ url('/blog/nasomattoduro') }}" style="text-decoration: none" class="col-2">
          <div>
            <img
              class="object-fit-none"
              height="150px"
              width="98%"
              src="https://xxivstore.com/wp-content/themes/yootheme/cache/70/duro-70abe648.webp"
              alt=""
            />
          </div>
          <p
            style="
              font-size: 15px;
              font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial,
                sans-serif;
            "
          >
            Nasomatto Duro – Don’t mess with me!
          </p>
        </a>
        <a href="{{ url('/blog/getfree') }}" style="text-decoration: none" class="col-2">
          <div>
            <img
              class="object-fit-none"
              height="150px"
              width="98%"
              src="https://xxivstore.com/wp-content/themes/yootheme/cache/c5/311592131_658719648988884_6693361248492413895_n-c506c104.webp"
              alt=""
            />
          </div>
          <p
            style="
              font-size: 15px;
              font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial,
                sans-serif;
            "
          >
            Chương trình quà tặng nhân ngày 20-10
          </p>
        </a>
      </div>
    </div>

    <div id="Letter" class="Letter text-center">
      <h1>Đăng ký thành viên để nhận khuyến mại</h1>
      <p>Theo dõi chúng tôi để nhận thêm nhiều ưu đãi</p>
      <div class="d-flex justify-content-center">
        <input type="text" placeholder="nhập mail" />
        <a class="mail-btn">Đăng kí</a>
      </div>
    </div>

    <div class="Follow d-flex justify-content-center">
      <i class="fa-brands fa-facebook"></i>
      <i class="fa-brands fa-instagram"></i>
      <i class="fa-brands fa-youtube"></i>
      <i class="fa-brands fa-telegram"></i>
    </div>

    <div class="Footer d-flex flex-row col-12">
      <div class="d-flex flex-column col-4 text-center">
        <h3>xxiv store</h3>
        <a href="">ưu đãi thành viên</a>
        <a href="">tài khoản</a>
        <a href="">tuyển dụng</a>
      </div>
      <div class="d-flex flex-column col-4 text-center">
        <h3>chính sách bán hàng</h3>
        <a href="">phương thức vận chuyển</a>
        <a href="">câu hỏi thường gặp</a>
        <a href="">điều khoản và điện kiện sử dụng</a>
        <a href="">điều khoản và điều kiện bán hàng</a>
        <a href="">thông báo pháp lý</a>
      </div>
      <div class="d-flex flex-column col-4 text-center">
        <h3>thông tin chung</h3>
        <a href="">giới thiệu</a>
        <a href="">blog</a>
        <a href="">liên hệ</a>
        <a href="">sản phẩm</a>
      </div>
    </div>

    <div class="Footer-bot">
      <p>© xxiv 2021 | all right reserved</p>
    </div>
  </body>
</html>
