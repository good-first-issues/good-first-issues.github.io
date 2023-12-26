![Các vấn đề đầu tiên tốt](./assets/github/social-preview.png)

# Số đầu tiên hay

**Vấn đề tốt đầu tiên** là một sáng kiến nhằm tuyển chọn các lựa chọn dễ dàng từ các dự án phổ biến, vì vậy các nhà phát triển chưa bao giờ đóng góp cho nguồn mở có thể bắt đầu nhanh chóng.

Trang web: [good-first-issues.github.io](https://good-first-issues.github.io)

Trang web này chủ yếu nhắm đến các nhà phát triển muốn đóng góp cho phần mềm nguồn mở nhưng không biết bắt đầu từ đâu và như thế nào.

Những người bảo trì nguồn mở luôn tìm cách thu hút nhiều người tham gia hơn, nhưng các nhà phát triển mới thường cho rằng việc trở thành người đóng góp là một thách thức. Chúng tôi tin rằng việc giúp các nhà phát triển khắc phục các sự cố cực kỳ dễ dàng sẽ loại bỏ rào cản cho những đóng góp trong tương lai. Đây là lý do tại sao *Số báo đầu tiên tốt* tồn tại.

## Thêm dự án mới

Bạn có thể thêm dự án mới vào *Các vấn đề đầu tiên tốt*, chỉ cần làm theo các bước sau:

- Để duy trì chất lượng của các dự án trong *Vấn đề đầu tiên tốt*, vui lòng đảm bảo kho lưu trữ GitHub của bạn đáp ứng các tiêu chí sau:

     - Có ít nhất 3 vấn đề được gắn nhãn `tốt vấn đề đầu tiên`. Nhãn này đã có sẵn trên tất cả các kho lưu trữ theo mặc định.

     - Nó chứa `README.md` với hướng dẫn thiết lập chi tiết cho dự án

     - Nó được duy trì tích cực (cập nhật lần cuối cách đây chưa đầy 1 tháng)

- Thêm đường dẫn kho lưu trữ của bạn (theo định dạng `chủ sở hữu/tên` và thứ tự từ điển) trong [repositories.json](https://github.com/gomzykov/good-first-issue/blob/main/repositories.json).

- Tạo một yêu cầu kéo mới. Vui lòng thêm liên kết đến trang vấn đề của kho lưu trữ trong phần mô tả PR. Sau khi yêu cầu kéo được hợp nhất, các thay đổi sẽ có trên [good-first-issues.github.io](https://good-first-issues.github.io).

## Làm thế nào nó hoạt động?

- First *Good First Issues* là một trang web tĩnh sử dụng [PHP](https://www.php.net)` để tạo các tệp HTML.
- Chúng tôi sử dụng [API GitHub REST](https://docs.github.com/en/rest) để tìm nạp các vấn đề từ các kho lưu trữ được liệt kê trong [repositories.json](https://github.com/gomzykov/good-first -issue/blob/main/repositories.json).
- Để xử lý các vấn đề theo định kỳ (hai lần một ngày), chúng tôi sử dụng [GitHub Workflow](https://docs.github.com/en/actions/USE-workflows).

## Giúp chúng tôi phát triển

Việc điều hướng các dự án nguồn mở có thể khá khó khăn đối với những người mới bắt đầu cũng như những người đóng góp có kinh nghiệm. *Các vấn đề đầu tiên tốt* sẽ giải quyết vấn đề này bằng cách cung cấp một nền tảng đóng vai trò là điểm khởi đầu cho những người muốn bắt đầu với nguồn mở hoặc những người đang muốn tham gia vào một dự án mới.

Càng nhiều người biết về [good-first-issues.github.io](https://good-first-issues.github.io) thì càng tốt. Có nhiều cách khác nhau để bạn có thể giúp chúng tôi phát triển: chẳng hạn như bạn có thể đóng góp vào các danh sách 'tuyệt vời', viết blog về chúng tôi, liên hệ với các blogger, những người có ảnh hưởng về công nghệ, nhà phát triển và nguồn mở trên Twitter và YouTube. Hãy thử và nhận được [good-first-issues.github.io](https://good-first-issues.github.io) được đề cập trong video hoặc tweet!

## Gợi ý và mong muốn

Nếu có câu hỏi hoặc đề xuất (hoặc phát hiện thấy lỗi), bạn luôn có thể gửi thư tới [issues](https://github.com/good-first-issues/good-first-issues.github.io/issues).

## Giấy phép

Đây là phần mềm nguồn mở được cấp phép theo [Giấy phép MIT](https://github.com/good-first-issues/good-first-issues.github.io/blob/main/LICENSE).