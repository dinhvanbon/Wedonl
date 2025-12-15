# Mô tả dự án – Website bán giày
Tên dự án
Xây dựng Website Thương mại Điện tử Bán Giày Trực Tuyến

PHẦN 1: TÓM TẮT VỀ WEBSITE

Bài tập lớn giữa kỳ môn Web nâng cao là một dự án nhằm giúp sinh viên vận dụng các kiến thức đã học để xây dựng một website hoàn chỉnh, có khả năng giải quyết một bài toán thực tế trong lĩnh vực quản lý hoặc kinh doanh. Trong quá trình thực hiện bài tập lớn, nhóm sinh viên sẽ tiến hành phân tích yêu cầu, xác định mục tiêu của hệ thống, đối tượng người dùng cũng như các chức năng cần thiết của website.

Trong đề tài này, nhóm lựa chọn xây dựng website bán giày 2PSS Sneaker, một hệ thống hỗ trợ người dùng xem sản phẩm, đặt hàng và quản lý đơn hàng trực tuyến. Website được thiết kế với giao diện đơn giản, dễ sử dụng, tập trung vào trải nghiệm người dùng. Phần giao diện được xây dựng bằng HTML, CSS kết hợp Tailwind CSS, phần xử lý tương tác phía client sử dụng JavaScript, backend sử dụng PHP với framework Laravel, và dữ liệu được quản lý bằng MySQL.

PHẦN 2: GIỚI THIỆU

Trong những năm gần đây, thương mại điện tử ngày càng phát triển mạnh mẽ và trở thành một xu hướng tất yếu trong hoạt động kinh doanh. Đặc biệt, lĩnh vực thời trang và giày dép là một trong những ngành có nhu cầu mua sắm trực tuyến cao, đòi hỏi các hệ thống bán hàng phải đảm bảo tính tiện lợi, nhanh chóng và dễ sử dụng.

Xuất phát từ thực tế đó, đề tài “Xây dựng website bán giày 2PSS Sneaker” được lựa chọn nhằm áp dụng các kiến thức đã học vào việc xây dựng một website thương mại điện tử cơ bản. Hệ thống không chỉ giúp người dùng dễ dàng tiếp cận và mua sắm sản phẩm mà còn hỗ trợ người quản lý trong việc quản lý sản phẩm, đơn hàng và người dùng. Đây là một đề tài mang tính thực tiễn cao, phù hợp với nội dung học phần Web nâng cao.

PHẦN 3: PHÂN TÍCH VÀ THIẾT KẾ HỆ THỐNG
3.1 Công nghệ sử dụng
3.1.1 HTML, CSS

HTML (HyperText Markup Language) là ngôn ngữ đánh dấu được sử dụng để xây dựng cấu trúc cơ bản của trang web. CSS (Cascading Style Sheets) là ngôn ngữ dùng để định dạng và tạo kiểu cho các thành phần HTML như màu sắc, bố cục, phông chữ và hiệu ứng giao diện.

Trong đề tài này, HTML và CSS được sử dụng để xây dựng giao diện website, kết hợp với Tailwind CSS nhằm hỗ trợ thiết kế nhanh, gọn và đảm bảo tính nhất quán trong toàn bộ hệ thống.

3.1.2 JavaScript

JavaScript là ngôn ngữ lập trình được sử dụng để tăng tính tương tác cho website. JavaScript cho phép xử lý các sự kiện phía người dùng như thêm sản phẩm vào giỏ hàng, kiểm tra dữ liệu nhập vào và cập nhật nội dung trang mà không cần tải lại toàn bộ trang web.

Trong hệ thống website bán giày, JavaScript được sử dụng chủ yếu ở phía client để nâng cao trải nghiệm người dùng và hỗ trợ tương tác với backend.

3.1.3 Laravel

Laravel là một framework PHP phổ biến, được thiết kế theo mô hình MVC (Model – View – Controller) giúp tổ chức mã nguồn một cách rõ ràng và dễ bảo trì. Laravel cung cấp nhiều công cụ hỗ trợ sẵn như routing, xác thực người dùng, quản lý cơ sở dữ liệu và bảo mật.

Việc sử dụng Laravel giúp quá trình phát triển website trở nên nhanh chóng, giảm thiểu lỗi và đảm bảo cấu trúc hệ thống rõ ràng.

3.1.4 MySQL

MySQL là hệ quản trị cơ sở dữ liệu quan hệ mã nguồn mở, được sử dụng rộng rãi trong các ứng dụng web. MySQL cho phép lưu trữ, truy vấn và quản lý dữ liệu một cách hiệu quả, đồng thời dễ dàng tích hợp với PHP và Laravel.

Trong đề tài này, MySQL được sử dụng để quản lý toàn bộ dữ liệu của hệ thống như người dùng, sản phẩm và đơn hàng.

3.1.5 Cấu trúc cơ sở dữ liệu

Cơ sở dữ liệu của website bán giày 2PSS Sneaker được thiết kế theo mô hình quan hệ, bao gồm các bảng chính phục vụ cho việc quản lý người dùng, sản phẩm và đơn hàng. Các bảng có mối liên kết với nhau thông qua khóa chính và khóa ngoại nhằm đảm bảo tính toàn vẹn dữ liệu.

Các bảng chính trong hệ thống bao gồm:

Users: Lưu trữ thông tin người dùng đăng ký và sử dụng hệ thống.

Categories: Lưu trữ thông tin các danh mục sản phẩm.

Products: Lưu trữ thông tin chi tiết của các sản phẩm giày.

Orders: Lưu trữ thông tin đơn hàng của khách hàng.

Order_Details: Lưu trữ chi tiết các sản phẩm trong từng đơn hàng.

Thiết kế cơ sở dữ liệu theo cách này giúp hệ thống dễ dàng quản lý, mở rộng và nâng cấp trong quá trình phát triển sau này.
