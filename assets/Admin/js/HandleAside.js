export default function HandleAside() {
  document.addEventListener('DOMContentLoaded', function () {
    var links = document.querySelectorAll('.menu--item__link, .dropdowns--item__link');

    // Hàm để xóa tất cả các lớp active
    function removeActiveClasses() {
      links.forEach((link) => {
        link.classList.remove('active');
      });
    }

    links.forEach(function (link) {
      link.addEventListener('click', function (event) {
        // Ngăn chặn hành vi mặc định của thẻ <a>
        event.preventDefault();

        // Xóa tất cả các lớp active
        removeActiveClasses();

        // Thêm lớp active cho mục được chọn
        this.classList.add('active');

        var dropdown = this.nextElementSibling;
        var icon = this.querySelector('.iconDropdowns');

        // Kiểm tra xem phần tử có dropdown hay không
        if (dropdown && dropdown.classList.contains('dropdowns')) {
          // Ẩn tất cả các dropdowns khác
          document.querySelectorAll('.dropdowns').forEach((dd) => {
            if (dd !== dropdown) {
              dd.style.maxHeight = 0;
              dd.style.opacity = 0;
              dd.style.visibility = 'hidden';
            }
          });

          document.querySelectorAll('.iconDropdowns').forEach((ic) => {
            if (ic !== icon) {
              ic.classList.remove('bx-caret-down');
              ic.classList.add('bx-caret-right');
            }
          });

          // Hiển thị hoặc ẩn dropdown được chọn
          if (dropdown.style.maxHeight && dropdown.style.maxHeight !== '0px') {
            dropdown.style.maxHeight = 0;
            dropdown.style.opacity = 0;
            dropdown.style.visibility = 'hidden';
            icon.classList.remove('bx-caret-down');
            icon.classList.add('bx-caret-right');
          } else {
            dropdown.style.maxHeight = dropdown.scrollHeight + 'px';
            dropdown.style.opacity = 1;
            dropdown.style.visibility = 'visible';
            icon.classList.remove('bx-caret-right');
            icon.classList.add('bx-caret-down');
          }
        }
      });
    });
  });


}


