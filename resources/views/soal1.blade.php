1.	GIT Merupakan VCS atau Version Control System yang digunakan untuk mengetahui perubahan kode yang terjadi selama proses pengembangan perangkat lunak. 
GIT dapat membantu developer untuk bekerja sama pada proyek yang sama tanpa harus khawatir mengganggu pekerjaan satu sama lain. Setiap developer dapat membuat salinan proyek ke lokal dan saling membagi tugas, kemudian menggabungkan hasil masing-masing ke repositori pusat
Perintah-perintah yang biasanya digunakan yaitu :
1. Membuat Repository
Membuat repository dapat dilakukan dengan membuat repository baru di direktori dengan 
git init 
atau mengkloning repository yang sudah ada dengan 
git clone https://github.com/user/repo.git
2. Branching 
Perintah GIT untuk membuat cabang sendiri pada repository yang telah dibuat untuk mengerjakan bagian individu masing-masing
dimana ketika selesai dapat digabungkan dengan perintah merge ke cabang utama/main 
3. Commit and push
Commit merupakan titik perubahan yang dilakukan oleh developer yang kemudian di push ke repository agar dapat diakses oleh anggota tim lainnya.
4. Merge and Pull Request
setelah menyelesaikan branch maka perlu dilakukan merge untuk menggabungkan bagian antar tim yang kemudian diperlukan pull request untuk
melihat perubahan yang dilakukan oleh anggota tim lain sebelum digabungkan 
5. Resolusi Konflik
ketika melakukan merge, biasanya terjadi konflik apabila terjadi kesalahan dalam mengedit baris yang sama, maka GIT akan meminta
resolusi konflik sebelum melanjutkan
6. git status
Menampilkan status dari repositori, termasuk perubahan yang belum di-commit.
7. git pull
Mengambil perubahan terbaru dari repository 
8. git checkout feature-branch
Berpindah ke cabang yang berbeda.
