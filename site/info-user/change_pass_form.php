<div>
    <div class="normal-case w-full">
        <div class="bg-white rounded w-full max-w-md">
            <form action="index.php" method="post" class="flex flex-col text-[#333] w-full">
                <h3 class=" text-2xl mb-6">Đổi mật khẩu</h3>
                <?php
                if (strlen($MESSAGE_ERORR) > 0) {
                    echo "<p><i class='fa-solid fa-circle-exclamation text-red-500'></i> $MESSAGE_ERORR</p>";
                }
                ?>
                <div class="flex flex-col mb-4">
                    <label for="ma_kh">Tài khoản</label>
                    <input type="text" name="ma_kh" id="ma_kh" value="<?= $user['ma_kh'] ?>" readonly class="text-[#666] border-gray-300 bg-gray-200 text-base px-2 py-2 outline-none mt-1 rounded" style="border-width: 1px;">
                </div>
                <div class="flex flex-col mb-4">
                    <label for="mat_khau">Mật khẩu cũ</label>
                    <input type="password" name="mat_khau" id="mat_khau" class="text-[#666] border-gray-300 bg-[#f7f7f7] text-base px-2 py-2 outline-none focus:border-[#62d2a2] mt-1 focus:bg-white rounded" style="border-width: 1px;">
                </div>
                <div class="flex flex-col mb-4">
                    <label for="mat_khau2">Mật khẩu mới</label>
                    <input type="password" name="mat_khau2" id="mat_khau2" class="text-[#666] border-gray-300 bg-[#f7f7f7] text-base px-2 py-2 outline-none focus:border-[#62d2a2] mt-1 focus:bg-white rounded" style="border-width: 1px;">
                </div>
                <div class="flex flex-col mb-4">
                    <label for="mat_khau3">Xác nhận mật khẩu mới</label>
                    <input type="password" name="mat_khau3" id="mat_khau3" class="text-[#666] border-gray-300 bg-[#f7f7f7] text-base px-2 py-2 outline-none focus:border-[#62d2a2] mt-1 focus:bg-white rounded" style="border-width: 1px;">
                </div>
                <div class="flex justify-between items-end">
                    <button name="btn_update_pass" class="text-white text-base uppercase font-semibold bg-[#62d2a2] py-2 px-2 rounded mt-3">Đổi mật khẩu</button>
                </div>
            </form>
        </div>
    </div>
</div>