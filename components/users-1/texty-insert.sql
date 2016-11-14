
INSERT INTO `texty` (`slug`, `name`, `prompt`, `user_email_subject`, `user_email_content`, `admin_email_subject`, `admin_email_content`, `user_sms`, `admin_sms`,`flag`) VALUES

( 'users_register_do', 'تایید ثبت نام', 'ثبت نام با موفقیت انجام شد!\r\nاطلاعات ورود به پنل کاربری به آدرس ایمیل شما ارسال شده است.', 'ثبت نام در {main_title}', 'سلام\r\n\r\nکاربر گرامی، {user_name} عزیز، \r\nحساب کاربری شما با موفقیت ایجاد شد\r\nاطلاعات حساب شما به شرح زیر است : \r\nنام کاربری:‌ {username}\r\nگذرواژه: {password}\r\n\r\nورود به سایت :‌\r\n{_URL}/login\r\n\r\nبا تشکر', '', '', 'کاربر گرامی خوش آمدید ثبت نام با موفقیت انجام شد نام کاربری: {username} کلمه عبور: {password}', '', 1),

( 'users_forgot_save', 'انجام بازیابی گذرواژه', 'بازیابی گذرواژه با موفقیت انجام شد', 'بازیابی گذرواژه انجام شد', 'با سلام\r\nکاربر گرامی\r\nباز یابی گذرواژه حساب شما با موفقیت انجام شد.\r\nبا تشکر', '', '', '', '', 1),

( 'users_forgot_send', 'ارسال لینک بازیابی گذرواژه', 'با سلام\r\nلینک بازیابی گذرواژه به آدرس ایمیل {username} ارسال شد.\r\nلطفا با باز کردن لینک فرم مربوطه را تکمیل نمایید.', 'درخواست گذرواژه جدید', 'سلام،\r\n\r\nبا توجه به درخواست شما برای ثبت کلمه عبور جدید ، ما یک پیوند برای تنظیم مجدد کلمه عبور به آدرس ایمیل شما ارسال نمودیم.\r\nلینک : \r\n{link}\r\n\r\nبا تشکر', '', '', '', '', 1),

( 'userprofile_save', 'ویرایش پروفایل', 'اطلاعات شما با موفقیت بروز شد.', '', '', '', '', '', '', 1),

( 'users_changepassword_save', 'تغییر کلمه عبور', 'کلمه عبور جدید شما با موفقیت ثبت شد.', '', '', '', '', '', '', 1);

--spi--
