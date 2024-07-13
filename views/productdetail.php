<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Detail</title>
    <style>
        /* General Styles */
        .all-prd {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #f4f4f4;
        }

        /* Container Styles */
        .container-prd {
            max-width: 1200px;
            margin: auto;
            padding: 0 20px;
        }

        /* Section Styles */
        .product-detail {
            background-color: #fff;
            padding: 50px 20px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        /* Row Styles */
        .row {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
            align-items: center;
        }

        /* Column Styles */
        .col-lg-6, .col-md-12, .col-12 {
            flex: 1;
            max-width: 100%;
        }

        /* Image Styles */
        .img-fluid {
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        /* Text Styles */
        h3 {
            font-size: 28px;
            color: #333;
            margin: 20px 0;
        }

        h2 {
            font-size: 24px;
            color: #e74c3c;
            margin: 20px 0;
        }

        h4 {
            font-size: 20px;
            color: #333;
            margin: 20px 0;
        }

        p {
            font-size: 16px;
            color: #555;
            line-height: 1.6;
        }

        /* Button Styles */
        .size-btn, .buy-btn {
            background-color: #e74c3c;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-right: 10px;
        }

        .size-btn:hover, .buy-btn:hover {
            background-color: #c0392b;
        }

        .size-btn {
            background-color: #ddd;
            color: #333;
        }

        .size-btn.active {
            background-color: #e74c3c;
            color: #fff;
        }

        /* Input Styles */
        .quantity-input {
            width: 60px;
            padding: 10px;
            margin: 20px 0;
            border-radius: 5px;
            border: 1px solid #ddd;
            text-align: center;
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .row {
                flex-direction: column;
            }

            .col-lg-6, .col-md-12, .col-12 {
                max-width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="all-prd">
        <section class="container-prd product-detail my-5 pt-5">
            <div class="row mt-5">
                <div class="col-lg-6 col-md-12 col-12">
                    <img class="img-fluid w-100" src="burger/img/product-1.jpg" alt="Burger Whopper Jr" />
                </div>
                <div class="col-lg-6 col-md-12 col-12">
                    <h3 class="py-4">BURGER WHOPPER JR</h3>
                    <h2>$19.00 VND</h2>
                    <div class="size-selection my-3">
                        <button class="size-btn">S</button>
                        <button class="size-btn">M</button>
                        <button class="size-btn">L</button>
                    </div>
                    <input type="number" value="1" class="quantity-input" />
                    <button class="buy-btn">Thêm Vào Giỏ Hàng</button>
                    <h4 class="mt-5 mb-5">Mô tả sản phẩm</h4>
                    <p>
                    Nguyên liệu làm bánh mì kẹp thịt của chúng tôi là miếng cà chua, rau diếp và thịt bò. Các nguyên liệu trên được sản xuất và bán hàng ngày. Nước sốt bò thơm ngon đậm đà hương vị gia truyền. Sản phẩm luôn tươi ngon và đảm bảo an toàn thực phẩm.
                    </p>
                </div>
            </div>
        </section>
        
    </div>
</body>
<script>
            document.querySelectorAll('.size-btn').forEach(button => {
                button.addEventListener('click', () => {
                    document.querySelectorAll('.size-btn').forEach(btn => btn.classList.remove('active'));
                    button.classList.add('active');
                });
            });
        </script>
</html>
