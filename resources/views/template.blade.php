<!DOCTYPE html>
<html>
<head>
        <title>Educa Studio</title>
<body>
 <header>
    <h2>A Simple Fun Education Tool</h2>
    <nav>
        <a href="/home">HOME</a>
        |
        <a href="/category/{id}">PRODUCTS</a>
        |
        <a href="/news/{id?}">NEWS</a>
        |
        <a href="/programkerja/{id}">PROGRAM</a>
        |
        <a href="/about">ABOUT-US</a>
        |
        <a href="/contact">CONTACT-US</a>
    </nav>
    </header>
    <hr/>
 <!-- bagian judul halaman blog -->
    <h3> @yield('judul_halaman_website') </h3>
 <!-- bagian konten blog -->
    @yield('konten_website')
    <br/>
    <hr/>
    </body>
</html>