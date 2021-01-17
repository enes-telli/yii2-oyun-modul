# Yii2 Oyun Modülü - Enes Telli
## Hakkında
Bu modül aracılığıyla türlerine göre oyunlar oluşturulabilir. Oluşturulacak olan oyunların görünürde dört özelliği bulunmaktadır. Bunlar;
`isim`, `yayımcı`, `yayım yılı` ve `tür`'dür.

## Kurulum

Öncelikle boş bir projeye sahip olmanız gerekmektedir. Bunun için composer kurulu kabul edilmiştir. Eğer sahip değilseniz [buradan](https://getcomposer.org/) indirebilirsiniz. Sonrasında aşağıdaki komut ile yeni bir proje oluşturabilirsiniz.

```console
composer create-project --prefer-dist yiisoft/yii2-app-advanced advanced
```

Sonrasında projenizin ana dizinine gidiniz ve aşağıdaki komutu çalıştırarak modül kurulumunu gerçekleştiriniz.

```console
composer require --prefer-dist enestelli/yii2-oyun-modul "dev-main"
 ```

Sonrasında `backend\config` dizinindeki `main.php` dosyasını düzenlemek için açınız. Aşağıda gösterildiği şekilde düzenlemeyi yaparak modülü ekleyiniz.

```
'modules' => [
    'Oyun' => [
        'class' => 'enestelli\Oyun\Module',
    ],
],
 ```

Modülün başarılı bir şekilde çalışması için migration işleminin yapılması şarttır. Aşağıdaki komut ile migration işlemi gerçekleştirilmelidir.

```console
php yii migrate/up --migrationPath=@vendor/enestelli/yii2-oyun-modul/src/migrations
 ```

Bu adımı da tamamladıktan sonra modül çalışır vaziyettedir. Herhangi bir tarayıcıda aşağıdaki adrese gidildiğinde modül açılacaktır.

```console
siteAdresi/backend/web/index.php?r=Oyun/oyun
```

## Migrations

Modül içerisindeki migration dosyasında `oyun` ve `oyuntur` adında 2 adet tablo bulunmaktadır. `oyun` tablosundaki `tur` özelliği, `oyuntur` tablosunun tek özelliği olan `tur`'den gelmektedir. Buradaki ilişki için foreign key kullanılmıştır ve gerekli indeksleme yapılmıştır.

## Ekran Fotoğrafları

#### Tablolar Arası İlişki

<img src="https://user-images.githubusercontent.com/55920002/104820616-1d27c500-5847-11eb-88f0-b23171a6d24f.png"/>

#### Yeni Oyun Oluşturma

<img src="https://user-images.githubusercontent.com/55920002/104820392-7131aa00-5845-11eb-800d-e33846e83b53.png"/>

#### Seçilebilecek Oyun Türleri

<img src="https://user-images.githubusercontent.com/55920002/104820529-4b58d500-5846-11eb-9fb2-e060b6a9422b.png"/>

#### Oluşturulan Oyunun Gösterilmesi

<img src="https://user-images.githubusercontent.com/55920002/104820397-72fb6d80-5845-11eb-927e-6ed70115dc39.png"/>

#### Oluşturulan Bütün Oyunların Gösterilmesi

<img src="https://user-images.githubusercontent.com/55920002/104820502-1056a180-5846-11eb-9e71-b1179e1d5543.png"/>


