# Laravel 12 可靠、快速地取得公用 IP 位址

引入 knotsphp 的 publicip 套件來擴增可靠、快速地取得公用 IP 位址，公用 IP 位址由網際網路服務提供者（ISP）所分配，是路由器用於與廣域網路通訊的位址。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產⽣ Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 執行 __Artisan__ 指令的 __migrate__ 來執行所有未完成的遷移。
```sh
$ php artisan migrate
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以經由 `/public-ip-address` 來進行公用 IP 位址取得。

----

## 畫面截圖
![](https://i.imgur.com/m2Y0Fha.png)
> 如果有多台設備使用相同的網際網路連線，這些設備會共用相同的公用 IP 位址
