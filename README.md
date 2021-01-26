----- Hướng dẫn cài đặt chi tiết -----

Sau khi clone source code từ github về máy. 
 + Tiến hành mở project bằng visual studio code.
![alt text](https://drive.google.com/file/d/1ytdImkFS2iwRkQNiZzHecE_IriG0bYDY/view)
 + Sau đó mở trình terminal và chạy lệnh cập nhật Laravel : composer update ramsey/uuid v2.4
 + Tiếp theo import cơ sở dữ liệu mysql bằng file clinic.sql trong thư mục dự án.
 + Sau khi cập nhật thành công tiến hành khởi chạy server bằng lệnh : php artisan serve

Tài khoản Admin : admin@gmail.com

Password : ngoc123456

----- Hướng dẫn cài đặt chi tiết -----

----- Phân chia công việc -----

-Models và chức năng trang bác sĩ (Huỳnh Thị Ngọc)->(Nhóm Trưởng)

-Views (Lê Hoàng Phi)

-Controllers trang admin và bênh nhân (Đỗ Văn Tú)

----- Phân chia công việc -----

Mô tả bài toán:
Đây là ứng dụng web đặt lịch hẹn với bác sĩ. Ứng dụng booking này dành cho 3 đối tượng là bệnh nhân, bác sĩ và admin. Mỗi đối tượng có một trang riêng.

1. Bệnh nhân
- Sẽ có thể đặt lịch hẹn với bác sĩ của họ. 
- Chọn bác sĩ có sẵn vào một ngày cụ thể và có thể đặt một thời gian cụ thể cho một ngày cụ thể cũng sẽ được hiển thị trên bảng điều khiển sau đó. 
- Bảng điều khiển bệnh nhân cũng cho biết liệu bệnh nhân đó đã đến gặp bác sĩ hay chưa. Nếu có, bệnh nhân đó sẽ thấy loại thuốc do bác sĩ kê đơn trên bảng điều khiển của mình. 
Và họ cũng có thể cập nhật hồ sơ của mình.

2. Admin 
- Có thể tạo và cập nhật thông tin bác sĩ. 
- Có thể tổng hợp các bệnh nhân và xem ai đã đặt lịch hẹn vào một ngày cụ thể. 
- Có thể chuyển đổi trạng thái của bệnh nhân là đã khám/không đến khám.
- Có thể tạo phòng ban, cập nhật và xóa chúng. 
- Những thông tin như có bao nhiêu bác sĩ đang làm việc tại phòng khám? bệnh nhân đã đặt lịch hẹn như thế nào? Phòng khám có bao nhiêu khoa?...

3. Bác sĩ 
- Có thể tạo lịch hẹn cho một ngày cụ thể. 
- Có thể cập nhật thời gian. 
- Có thể kiểm tra xem có bao nhiêu bệnh nhân đã đặt lịch hẹn vào một ngày cụ thể bằng cách lọc qua ngày. 
- Kê đơn thuốc cho bệnh nhân.
