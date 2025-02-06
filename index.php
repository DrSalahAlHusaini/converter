<!DOCTYPE html>
<html lang="ar">
<head>
  <meta charset="UTF-8">
  <title>محولات النصوص بين اللاتينية والعربية</title>
  <style>
    /* تنسيق العنوان الرئيسي */
    h1 {
      color: #3366CC; /* لون أزرق أفتح */
      text-align: center;
      font-size: 32px; /* حجم الخط أكبر */
    }

    /* تنسيق النص الإضافي */
    .subtitle {
      color: #333333; /* لون رمادي غامق */
      text-align: center;
      font-size: 18px; /* حجم الخط أكبر */
    }

    /* تنسيق مربعات النصوص */
    textarea {
      width: 100%;
      max-width: 600px;
      height: 150px; /* ارتفاع أكبر */
      margin: 10px auto;
      display: block;
      padding: 10px;
      font-size: 16px;
      resize: none;
      border: 1px solid #CCCCCC; /* إطار رمادي فاتح */
      border-radius: 5px; /* زوايا دائرية */
    }

    /* لضبط اتجاه النص عند الكتابة بالعربية */
    textarea.arabic {
      direction: rtl;
      text-align: right;
    }

    /* تنسيق تذييل الصفحة */
    footer {
      text-align: center;
      color: #777777; /* لون رمادي أغمق */
      font-size: 14px; /* حجم الخط أصغر */
      margin-top: 30px;
    }
    footer a {
      color: #777777;
      text-decoration: none;
    }

    /* جعل المحتوى في المنتصف */
    .container {
      width: 90%;
      max-width: 700px;
      margin: auto;
      text-align: center;
    }

    /* تنسيق الأزرار */
    button {
      background-color: #008CBA; /* لون أزرق */
      color: white;
      padding: 12px 24px;
      border: none;
      cursor: pointer;
      font-size: 16px;
      margin: 10px;
      border-radius: 5px; /* زوايا دائرية */
    }
    button:hover {
      background-color: #007B9E; /* لون أزرق أغمق عند التمرير */
    }

    /* تنسيق النص الجديد */
    .supported-sites {
      color: #3366CC; /* لون أزرق */
      text-align: center;
      font-size: 16px;
      margin-top: 20px;
    }
    .supported-sites a {
      color: #3366CC; /* لون أزرق */
      text-decoration: none;
    }
    .supported-sites a:hover {
      text-decoration: underline; /* خط تحت النص عند التمرير */
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>محول نصوص النقوش القديمة بين اللاتينية والعربية<br>Latin to Arabic - Arabic to Latin Text Converter</h1>
    <p class="subtitle">معالجة الدكتور صلاح الحسيني<br>By Dr. Salah Alhusaini</p>

    <!-- المحول الأول: من اللاتينية إلى العربية -->
    <h2>المحول من اللاتينية إلى العربية<br>Latin to Arabic Converter</h2>
    <form method="POST" action="">
      <textarea name="latinToArabicInput" placeholder="اكتب هنا بالأحرف اللاتينية..."></textarea>
      <button type="submit" name="convertLatinToArabic">تحويل إلى عربي<br>Convert to Arabic</button>
    </form>
    <?php
    if (isset($_POST['convertLatinToArabic'])) {
      $latinText = $_POST['latinToArabicInput'];
      $arabicText = convertLatinToArabic($latinText);
      echo '<textarea class="arabic" placeholder="النص المحول سيظهر هنا..." readonly>' . $arabicText . '</textarea>';
    }
    ?>

    <!-- المحول الثاني: من العربية إلى اللاتينية -->
    <h2>المحول من العربية إلى اللاتينية<br>Arabic to Latin Converter</h2>
    <form method="POST" action="">
      <textarea name="arabicToLatinInput" class="arabic" placeholder="اكتب هنا بالأحرف العربية..."></textarea>
      <button type="submit" name="convertArabicToLatin">تحويل إلى لاتيني<br>Convert to Latin</button>
    </form>
    <?php
    if (isset($_POST['convertArabicToLatin'])) {
      $arabicText = $_POST['arabicToLatinInput'];
      $latinText = convertArabicToLatin($arabicText);
      echo '<textarea placeholder="النص المحول سيظهر هنا..." readonly>' . $latinText . '</textarea>';
    }
    ?>
  </div>

  <!-- تذييل الصفحة -->
  <footer>
    Dr. Salah Alhusaini &copy; 2025 - 
    <a href="https://reach.link/salahalhusaini" target="_blank">https://reach.link/salahalhusaini</a>
  </footer>

  <!-- المواقع التي يدعمها المحول -->
  <div class="supported-sites">
    <p>المواقع التي يدعمها المحول:</p>
    <p>مدونة النقوش العربية الجنوبية (DASI): <a href="https://dasi.cnr.it/" target="_blank">https://dasi.cnr.it/</a></p>
    <p>مدونة النقوش العربية الشمالية (DICONAB): <a href="https://diconab.huma-num.fr/inscriptions/" target="_blank">https://diconab.huma-num.fr/inscriptions/</a></p>
  </div>

  <!-- لتحويل التواريخ اليمنية القديمة -->
  <div class="supported-sites">
    <p>لتحويل التواريخ اليمنية القديمة:</p>
    <p>محول التواريخ: <a href="https://drsalahalhusaini.blogspot.com/p/date-converter.html" target="_blank">https://drsalahalhusaini.blogspot.com/p/date-converter.html</a></p>
  </div>

  <?php
  // الدالة لتحويل النص من اللاتينية إلى العربية
  function convertLatinToArabic($latinText) {
    $arabicText = str_replace(
      ['ʾ', 'b', 't', 'ṯ', 'g', 'ḥ', 'ḫ', 'd', 'ḏ', 'r', 'z', 's¹', 's²', 's³', 'ṣ', 'ḍ', 'ṭ', 'ẓ', 'ʿ', 'ġ', 'f', 'q', 'k', 'l', 'm', 'n', 'h', 'w', 'y', 'B', 'T', 'Ṯ', 'G', 'Ḥ', 'Ḫ', 'D', 'Ḏ', 'R', 'Z', 'S¹', 'S²', 'S³', 'Ṣ', 'Ḍ', 'Ṭ', 'Ẓ', 'Ġ', 'F', 'Q', 'K', 'L', 'M', 'N', 'H', 'W', 'š', 'ś', 'Y'],
      ['أ', 'ب', 'ت', 'ث', 'ج', 'ح', 'خ', 'د', 'ذ', 'ر', 'ز', 'س', 'ش', 'س³', 'ص', 'ض', 'ط', 'ظ', 'ع', 'غ', 'ف', 'ق', 'ك', 'ل', 'م', 'ن', 'ه', 'و', 'ي', 'ب', 'ت', 'ث', 'ج', 'ح', 'خ', 'د', 'ذ', 'ر', 'ز', 'س', 'ش', 'س³', 'ص', 'ض', 'ط', 'ظ', 'غ', 'ف', 'ق', 'ك', 'ل', 'م', 'ن', 'ه', 'و', 'ش', 'س³', 'ي'],
      $latinText
    );
    return $arabicText;
  }

  // الدالة لتحويل النص من العربية إلى اللاتينية
  function convertArabicToLatin($arabicText) {
    $latinText = str_replace(
      ['أ', 'ب', 'ت', 'ث', 'ج', 'ح', 'خ', 'د', 'ذ', 'ر', 'ز', 'س', 'ش', 'س³', 'ص', 'ض', 'ط', 'ظ', 'ع', 'غ', 'ف', 'ق', 'ك', 'ل', 'م', 'ن', 'ه', 'و', 'ي'],
      ['ʾ', 'b', 't', 'ṯ', 'g', 'ḥ', 'ḫ', 'd', 'ḏ', 'r', 'z', 's¹', 's²', 's³', 'ṣ', 'ḍ', 'ṭ', 'ẓ', 'ʿ', 'ġ', 'f', 'q', 'k', 'l', 'm', 'n', 'h', 'w', 'y'],
      $arabicText
    );
    return $latinText;
  }
  ?>
</body>
</html>