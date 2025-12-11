Katkıda Bulunma
Projeye katkıda bulunmak isterseniz:

Projeyi fork edin
Feature branch oluşturun (git checkout -b feature/yeniOzellik)
Değişikliklerinizi commit edin (git commit -am 'Yeni özellik eklendi')
Branch'inizi push edin (git push origin feature/yeniOzellik)
Pull Request oluşturun



# WH Kurumsal v3.0.0

<p align="center">
<img src="https://img.shields.io/badge/Version-3.0.0-blue.svg" alt="Version">
<img src="https://img.shields.io/badge/Laravel-12.x-red.svg" alt="Laravel">
<img src="https://img.shields.io/badge/PHP-8.4+-green.svg" alt="PHP">
<img src="https://img.shields.io/badge/License-MIT-yellow.svg" alt="License">
</p>

## 🏢 WH Kurumsal Hakkında

WH Kurumsal, modern web teknolojileri kullanılarak geliştirilmiş kapsamlı bir kurumsal yönetim sistemidir. Laravel framework'ü üzerine inşa edilmiş olan bu sistem, işletmelerin müşteri yönetimi, fatura işlemleri, teklif hazırlama ve muhasebe süreçlerini dijitalleştirmelerine olanak tanır.

## ✨ Özellikler

### 💰 **Muhasebe ve Ödeme Sistemi**
- Otomatik fatura oluşturma ve yönetimi
- Ödeme takibi ve mutabakat sistemi
- Müşteri bakiye hesaplamaları
- MRR (Monthly Recurring Revenue) sistemi

### 🏢 **Müşteri Yönetimi**
- Kapsamlı müşteri bilgi yönetimi
- Bakiye takibi ve raporlama
- Müşteri bazlı hizmet yönetimi
- İletişim geçmişi takibi

### 📋 **Teklif ve Fatura Sistemi**
- Modern PDF teklif tasarımları
- Otomatik fatura oluşturma
- E-posta entegrasyonu
- Durum takibi ve raporlama

### 📊 **Dashboard ve Raporlama**
- Gerçek zamanlı metrikler
- MRR ve ARR hesaplamaları
- Yakında biten hizmetler takibi
- Geciken faturalar uyarıları

### 🎯 **Hizmet Yönetimi**
- Çoklu hizmet türü desteği
- Otomatik yenileme takibi
- MRR entegrasyonu
- Durum yönetimi

## 🚀 Teknolojiler

- **Backend**: Laravel 12.x (PHP 8.4+)
- **Frontend**: Vue.js 3.x, Alpine.js
- **Styling**: Tailwind CSS 3.x
- **Database**: MySQL 8.0+
- **PDF Generation**: DomPDF
- **Charts**: Chart.js

## 📋 Sistem Gereksinimleri

- PHP 8.4 veya üzeri
- MySQL 8.0 veya üzeri
- Composer
- Node.js & NPM
- Web sunucu (Apache/Nginx)

## 🛠️ Kurulum

1. **Projeyi klonlayın**
```bash
git clone https://github.com/your-repo/wh-kurumsal.git
cd wh-kurumsal
```

2. **Bağımlılıkları yükleyin**
```bash
composer install
npm install
```

3. **Ortam değişkenlerini ayarlayın**
```bash
cp .env.example .env
php artisan key:generate
```

4. **Veritabanını yapılandırın**
```bash
php artisan migrate
php artisan db:seed
```

5. **Frontend'i derleyin**
```bash
npm run build
```

6. **Uygulamayı başlatın**
```bash
php artisan serve
```

## 👥 Demo Hesaplar

- **Demo Hesabı**: `demo@example.com` / `demo123` (sadece görüntüleme)
- **Admin Hesabı**: `admin@whkurumsal.com` / `admin123` (tam yetki)

## 📚 Dokümantasyon

- [Kurulum Kılavuzu](INSTALLATION_GUIDE.md)
- [FTP Upload Kılavuzu](FTP_UPLOAD_GUIDE.md)
- [Değişiklik Notları](CHANGELOG.md)

## 🔧 Geliştirme

```bash
# Test çalıştırma
php artisan test

# Code style kontrolü
./vendor/bin/pint

# Frontend development
npm run dev
```

## 📈 Sürüm Geçmişi

- **v3.0.0** - Kapsamlı sistem güncellemeleri (2025-08-30)
- **v2.0.0** - Major release (2024-12-29)
- **v1.9.0** - Backend iyileştirmeleri (2024-12-28)

Detaylı değişiklik notları için [CHANGELOG.md](CHANGELOG.md) dosyasını inceleyin.

## 🤝 Katkıda Bulunma

1. Fork yapın
2. Feature branch oluşturun (`git checkout -b feature/amazing-feature`)
3. Commit yapın (`git commit -m 'Add amazing feature'`)
4. Push yapın (`git push origin feature/amazing-feature`)
5. Pull Request oluşturun

## 📄 Lisans

Bu proje MIT lisansı altında lisanslanmıştır. Detaylar için [LICENSE](LICENSE) dosyasını inceleyin.

## 📞 İletişim

- **Proje**: WH Kurumsal
- **Versiyon**: 3.0.0
- **Geliştirici**: WH Geliştirme Ekibi

---

<p align="center">WH Kurumsal v3.0.0 ile geliştirilmiştir ❤️</p>
