

<form action="index.php" method="post" class="flex flex-col text-[#333]">
    <h3 class=" text-2xl mb-4">Đăng nhập</h3>
    <?php 
        if(strlen($MESSAGE) > 0) {
            echo "<p><i class='fa-solid fa-circle-check text-green-500'></i> $MESSAGE</p>";
        }
    ?>
    <div class="flex flex-col mb-2">
        <label for="ma_kh">Tài khoản</label>
        <input type="text" name="ma_kh" id="ma_kh"
        class="text-[#666] border-gray-300 bg-[#f7f7f7] text-base px-2 py-2 outline-none focus:border-[#62d2a2] mt-1 focus:bg-white rounded"
        style="border-width: 1px;"
        >
        <small class="text-red-500 min-h-[20px]">
            <?php
                if(!empty($errors['ma_kh'])) {
                    echo $errors['ma_kh'];
                }
            ?>
        </small>
    </div>
    <div class="flex flex-col mb-2">
        <label for="mat_khau">Mật khẩu</label>
        <input type="text" name="mat_khau" id="mat_khau"
        class="text-[#666] border-gray-300 bg-[#f7f7f7] text-base px-2 py-2 outline-none focus:border-[#62d2a2] mt-1 focus:bg-white rounded"
        style="border-width: 1px;"
        >
        <small class="text-red-500 min-h-[20px]">
            <?php
                if(!empty($errors['mat_khau'])) {
                    echo $errors['mat_khau'];
                }
            ?>
        </small>
    </div>
    <div class="flex flex-col mb-2">
        <label>
            <input type="checkbox" name="ghi_nho"> Ghi nhớ tài khoản?
        </label>
    </div>
    <a href="index.php?btn_forgot" class="text-base underline decoration-1 text-[#62d2a2]">Quên mật khẩu</a>
    <div class="flex justify-between items-end">
        <button name="btn_login"
        class="text-white text-base uppercase font-semibold bg-[#62d2a2] py-2 px-2 rounded mt-3"
        >Đăng nhập</button>
        <a href="index.php" class="text-xs text-[#62d2a2]">Bạn chưa có tài khoản?</a>
    </div>
</form>