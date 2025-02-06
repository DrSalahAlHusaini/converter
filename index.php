<!DOCTYPE html>
<html lang="ar">
<head>
  <meta charset="UTF-8">
  <title>محولات النصوص بين اللاتينية والعربية</title>
  <style>
    /* تنسيق العنوان الرئيسي */
    h1 {
      color: #3366CC;
      text-align: center;
      font-size: 32px;
    }

    /* تنسيق النص الإضافي */
    .subtitle {
      color: #333333;
      text-align: center;
      font-size: 18px;
    }

    /* تنسيق مربعات النصوص */
    textarea {
      width: 100%;
      max-width: 600px;
      height: 150px;
      margin: 10px auto;
      display: block;
      padding: 10px;
      font-size: 16px;
      resize: none;
      border: 1px solid #CCCCCC;
      border-radius: 5px;
    }

    /* لضبط اتجاه النص عند الكتابة بالعربية */
    textarea.arabic {
      direction: rtl;
      text-align: right;
    }

    /* تنسيق تذييل الصفحة */
    footer {
      text-align: center;
      color: #777777;
      font-size: 14px;
      margin-top: 30px;
      padding: 20px;
      background-color: #f9f9f9;
      border-top: 1px solid #e0e0e0;
    }
    footer a {
      color: #3366CC;
      text-decoration: none;
      font-weight: bold;
    }
    footer a:hover {
      text-decoration: underline;
    }

    /* جعل المحتوى في المنتصف */
    .container {
      width: 90%;
      max-width: 700px;
      margin: auto;
      text-align: center;
    }

    /* تنسيق أزرار التحويل والمسح */
    .button-container {
      display: flex;
      justify-content: space-between;
      align-items: center;
      max-width: 600px;
      margin: 10px auto;
    }

    /* تنسيق زر المسح */
    button.clear-button {
      background-color: #ff4d4d; /* لون أحمر */
      color: white;
      padding: 12px 24px;
      border: none;
      cursor: pointer;
      font-size: 16px;
      margin: 10px;
      border-radius: 5px;
      order: 1; /* وضع زر المسح في البداية (اليسار) */
    }

    button.clear-button:hover {
      background-color: #cc0000; /* لون أحمر أغمق عند التمرير */
    }

    /* تنسيق زر التحويل */
    button.convert-button {
      background-color: #008CBA; /* لون أزرق */
      color: white;
      padding: 12px 24px;
      border: none;
      cursor: pointer;
      font-size: 16px;
      margin: 10px;
      border-radius: 5px;
      order: 2; /* وضع زر التحويل في النهاية (اليمين) */
    }

    button.convert-button:hover {
      background-color: #007B9E; /* لون أزرق أغمق عند التمرير */
    }

    /* تنسيق قسم المواقع والأدوات */
    .supported-sites {
      color: #000000; /* لون أسود */
      text-align: center;
      font-size: 16px; /* حجم خط أصغر */
      margin-top: 30px;
      padding: 25px;
      background-color: #f0f8ff; /* خلفية فاتحة */
      border-radius: 10px; /* زوايا دائرية */
      border: 1px solid #d3d3d3; /* إطار فاتح */
    }

    .supported-sites p {
      margin: 5px 0; /* تباعد بين الفقرات */
    }

    .supported-sites a {
      color: #000000; /* لون أسود */
      text-decoration: none;
      font-weight: bold; /* خط عريض */
    }

    .supported-sites a:hover {
      text-decoration: underline; /* خط تحت النص عند التمرير */
    }

    /* تنسيق قسم تحميل خط المسند */
    .download-section {
      text-align: center;
      color: #000000; /* لون أسود */
      font-size: 16px; /* حجم خط أصغر */
      margin-top: 30px;
      padding: 35px;
      background-color: #f0f8ff; /* خلفية فاتحة */
      border-radius: 10px; /* زوايا دائرية */
      border: 1px solid #d3d3d3; /* إطار فاتح */
    }

    .download-section a {
      color: #000000; /* لون أسود */
      text-decoration: none;
      font-weight: bold; /* خط عريض */
    }

    .download-section a:hover {
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
    <textarea id="latinToArabicInput" placeholder="اكتب أو الصق هنا بالأحرف الاتينية Type or paste here in Latin letters..."></textarea>
    <div class="button-container">
      <button class="clear-button" onclick="clearText('latinToArabicInput')">مسح <br> Clear</button>
      <button class="convert-button" onclick="convertLatinToArabic()">تحويل إلى عربي <br> convert to Arabic</button>
    </div>
    <textarea id="latinToArabicOutput" class="arabic" placeholder="النص المحول سيظهر هنا The converted text will appear here...."></textarea>

    <!-- المحول الثاني: من العربية إلى اللاتينية -->
    <h2>المحول من العربية إلى اللاتينية<br>Arabic to Latin Converter</h2>
    <textarea id="arabicToLatinInput" class="arabic" placeholder="اكتب أو الصق هنا بالأحرف العربية Write here in Arabic letters or paste..."></textarea>
    <div class="button-container">
      <button class="clear-button" onclick="clearText('arabicToLatinInput')">مسح <br> Clear</button>
      <button class="convert-button" onclick="convertArabicToLatin()">تحويل إلى لاتيني <br> convert to Latin</button>
    </div>
    <textarea id="arabicToLatinOutput" placeholder="النص المحول سيظهر هنا The converted text will appear here...."></textarea>
  </div>

  <!-- تذييل الصفحة -->
  <footer>
    <p>Dr. Salah Alhusaini &copy; 2025</p>
    <p><a href="https://reach.link/salahalhusaini" target="_blank">https://reach.link/salahalhusaini</a></p>
  </footer>

  <!-- قسم المواقع والأدوات -->
  <div class="supported-sites">
    <p>مواقع وأدوات مهمة للباحثين في مجال دراسة النقوش</p>
    <p>مدونة النقوش العربية الجنوبية (DASI):<br> 
      <a href="https://dasi.cnr.it/" target="_blank">https://dasi.cnr.it/</a>
    </p>
    <p>مدونة النقوش العربية الشمالية (DICONAB): <br>
      <a href="https://diconab.huma-num.fr/inscriptions/" target="_blank">https://diconab.huma-num.fr/inscriptions/</a>
    </p>
  </div>

  <!-- قسم تحميل خط المسند -->
  <div class="download-section">
    <p> Date convertr لتحويل التواريخ اليمنية القديمة<br> 
      <a href="https://drsalahalhusaini.blogspot.com/p/date-converter.html" target="_blank">https://drsalahalhusaini.blogspot.com/p/date-converter.html</a>
    <p>  mosnad font تحميل خط المسند تصميم صلاح الحسيني</p>
    <p><a href="https://www.mediafire.com/file/355y9z6rlyw4s5w" target="_blank">https://www.mediafire.com/file/355y9z6rlyw4s5w</a></p>
  </div>

  <script>
    // الدالة لتحويل النص من اللاتينية إلى العربية
    function convertLatinToArabic() {
      let latinText = document.getElementById("latinToArabicInput").value;

      // تحويل الأحرف اللاتينية إلى عربية
      let arabicText = latinText
        .replace(/ʾ/g, "أ")
        .replace(/b/g, "ب")
        .replace(/t/g, "ت")
        .replace(/ṯ/g, "ث")
        .replace(/g/g, "ج")
        .replace(/ḥ/g, "ح")
        .replace(/ḫ/g, "خ")
        .replace(/d/g, "د")
        .replace(/ḏ/g, "ذ")
        .replace(/r/g, "ر")
        .replace(/z/g, "ز")
        .replace(/s¹/g, "س")
        .replace(/s²/g, "ش")
        .replace(/s³/g, "س³")
        .replace(/ṣ/g, "ص")
        .replace(/ḍ/g, "ض")
        .replace(/ṭ/g, "ط")
        .replace(/ẓ/g, "ظ")
        .replace(/ʿ/g, "ع")
        .replace(/ġ/g, "غ")
        .replace(/f/g, "ف")
        .replace(/q/g, "ق")
        .replace(/k/g, "ك")
        .replace(/l/g, "ل")
        .replace(/m/g, "م")
        .replace(/n/g, "ن")
        .replace(/h/g, "ه")
        .replace(/w/g, "و")
        .replace(/y/g, "ي")
        .replace(/B/g, "ب")
        .replace(/T/g, "ت")
        .replace(/Ṯ/g, "ث")
        .replace(/G/g, "ج")
        .replace(/Ḥ/g, "ح")
        .replace(/Ḫ/g, "خ")
        .replace(/D/g, "د")
        .replace(/Ḏ/g, "ذ")
        .replace(/R/g, "ر")
        .replace(/Z/g, "ز")
        .replace(/S¹/g, "س")
        .replace(/S²/g, "ش")
        .replace(/S³/g, "س³")
        .replace(/Ṣ/g, "ص")
        .replace(/Ḍ/g, "ض")
        .replace(/Ṭ/g, "ط")
        .replace(/Ẓ/g, "ظ")
        .replace(/Ġ/g, "غ")
        .replace(/F/g, "ف")
        .replace(/Q/g, "ق")
        .replace(/K/g, "ك")
        .replace(/L/g, "ل")
        .replace(/M/g, "م")
        .replace(/N/g, "ن")
        .replace(/H/g, "ه")
        .replace(/W/g, "و")
        .replace(/š/g, "ش")
        .replace(/ś/g, "س³")
        .replace(/Y/g, "ي")
        .replace(/   /g, "")
        .replace(/  /g, " ")
        .replace(/-/g, "")
        .replace(/ /g, "/ ");

      document.getElementById("latinToArabicOutput").value = arabicText;
    }

    // الدالة لتحويل النص من العربية إلى اللاتينية
    function convertArabicToLatin() {
      let arabicText = document.getElementById("arabicToLatinInput").value;

      // تحويل الأحرف العربية إلى لاتينية
      let latinText = arabicText
        .replace(/أ/g, "ʾ")
        .replace(/ب/g, "b")
        .replace(/ت/g, "t")
        .replace(/ث/g, "ṯ")
        .replace(/ج/g, "g")
        .replace(/ح/g, "ḥ")
        .replace(/خ/g, "ḫ")
        .replace(/د/g, "d")
        .replace(/ذ/g, "ḏ")
        .replace(/ر/g, "r")
        .replace(/ز/g, "z")
        .replace(/س/g, "s¹")
        .replace(/ش/g, "s²")
        .replace(/س³/g, "s³")
        .replace(/ص/g, "ṣ")
        .replace(/ض/g, "ḍ")
        .replace(/ط/g, "ṭ")
        .replace(/ظ/g, "ẓ")
        .replace(/ع/g, "ʿ")
        .replace(/غ/g, "ġ")
        .replace(/ف/g, "f")
        .replace(/ق/g, "q")
        .replace(/ك/g, "k")
        .replace(/ل/g, "l")
        .replace(/م/g, "m")
        .replace(/ن/g, "n")
        .replace(/ه/g, "h")
        .replace(/و/g, "w")
        .replace(/ي/g, "y");

      document.getElementById("arabicToLatinOutput").value = latinText;
    }

    // دالة لمسح محتوى مربعات النص
    function clearText(areaId) {
      document.getElementById(areaId).value = "";
    }
  </script>
</body>
</html>
