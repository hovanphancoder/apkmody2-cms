# 🎨 APKMODY Theme - Frontend

## 📁 Scripts & Tools

### Performance Optimization Scripts

#### 1. `add-lazy-loading.php`
Thêm lazy loading attributes cho tất cả hình ảnh trong theme.

```bash
php add-lazy-loading.php
```

**Chức năng:**
- Tự động thêm `data-src` và `loading="lazy"` cho tất cả thẻ `<img>`
- Tạo placeholder SVG cho hình ảnh
- Xử lý tất cả file PHP trong theme

#### 2. `check-file-sizes.php`
Kiểm tra kích thước file và đưa ra khuyến nghị tối ưu hóa.

```bash
php check-file-sizes.php
```

**Chức năng:**
- Hiển thị kích thước CSS, JS, và hình ảnh
- So sánh file gốc vs file minified
- Đưa ra khuyến nghị tối ưu hóa
- Tính toán tổng tiết kiệm

#### 3. `optimize-images.php`
Tối ưu hóa hình ảnh và chuyển đổi sang WebP.

```bash
php optimize-images.php
```

**Yêu cầu:** ImageMagick extension
**Chức năng:**
- Resize hình ảnh theo kích thước tối đa
- Nén hình ảnh với quality tối ưu
- Chuyển đổi sang định dạng WebP
- Xóa metadata không cần thiết

## 🚀 Cách sử dụng

### Lần đầu setup:
```bash
# 1. Thêm lazy loading cho hình ảnh
php add-lazy-loading.php

# 2. Kiểm tra kích thước file
php check-file-sizes.php

# 3. Tối ưu hình ảnh (nếu có ImageMagick)
php optimize-images.php
```

### Maintenance định kỳ:
```bash
# Kiểm tra performance
php check-file-sizes.php

# Cập nhật lazy loading cho hình ảnh mới
php add-lazy-loading.php
```

## 📊 Kết quả mong đợi

- **Lazy Loading**: Giảm thời gian tải trang ban đầu
- **File Size**: Giảm 25-75% kích thước file
- **PageSpeed**: Cải thiện điểm số Google PageSpeed Insights
- **User Experience**: Tải trang nhanh hơn, mượt mà hơn

## ⚠️ Lưu ý

- Chạy `add-lazy-loading.php` sau khi thêm hình ảnh mới
- Backup trước khi chạy `optimize-images.php`
- Kiểm tra kết quả với Google PageSpeed Insights
- Monitor Core Web Vitals thường xuyên

## 🔧 Troubleshooting

### Lỗi ImageMagick:
```
ImageMagick extension is required for image optimization.
```
**Giải pháp:** Cài đặt ImageMagick hoặc bỏ qua bước optimize images.

### Lỗi quyền file:
```
Permission denied
```
**Giải pháp:** Chạy với quyền sudo hoặc kiểm tra quyền thư mục.

### Lazy loading không hoạt động:
**Kiểm tra:**
- File `lazy-load.min.js` có được load không
- Browser có hỗ trợ IntersectionObserver không
- Console có lỗi JavaScript không
