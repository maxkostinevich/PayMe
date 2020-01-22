<p align="center"><img width="832" alt="payme-form" src="https://user-images.githubusercontent.com/10295466/72933278-7b27e680-3d72-11ea-804c-fed3c306d4fa.png">
</p>

---

# PayMe

PayMe is a checkout payment solution built on top of Stripe API.
The application is used as a real-world SaaS example in my [book](https://maxkostinevich.com/books/laravel-saas/). 

### Demo
Demo is available at [PayMe.rocks](https://payme.rocks)

Test mode is **enabled**, so feel free to create new account and take a look how it works.

## Setup

### Deployment

```
composer install

php artisan view:clear
php artisan cache:clear
php artisan vendor:publish
php artisan migrate

php artisan storage:link
php artisan queue:restart
php artisan config:cache

php artisan horizon:purge
php artisan horizon:terminate

php artisan horizon
```

Then change ```APP_DOMAIN``` to the actual domain name of your app.
Email verification is enabled, so do not forget to set proper SMTP settings for outgoing emails.

---
### Want to learn more?
- Subscribe to my [Youtube Channel](https://www.youtube.com/channel/UCxcoXXEjRERiLX1ixP-3Vew) to stay up to date with my latest videos.

---
### [MIT License](https://opensource.org/licenses/MIT)

## IMPORTANT TERMS

### Indemnity
You agree to indemnify and hold harmless Author for any third-party claims, actions or suits, as well as any related expenses, liabilities, damages, settlements or fees arising from your use or misuse of the Software, or a violation of any terms of this license.

### Disclaimer Of Warranty
THE SOFTWARE IS PROVIDED “AS IS”, WITHOUT WARRANTY OF ANY KIND, EXPRESSED OR IMPLIED, INCLUDING, BUT NOT LIMITED TO, WARRANTIES OF QUALITY, PERFORMANCE, NON-INFRINGEMENT, MERCHANTABILITY, OR FITNESS FOR A PARTICULAR PURPOSE. FURTHER, LARAVEL LLC DOES NOT WARRANT THAT THE SOFTWARE OR ANY RELATED SERVICE WILL ALWAYS BE AVAILABLE.

### Limitations Of Liability
YOU ASSUME ALL RISK ASSOCIATED WITH THE INSTALLATION AND USE OF THE SOFTWARE. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS OF THE SOFTWARE BE LIABLE FOR CLAIMS, DAMAGES OR OTHER LIABILITY ARISING FROM, OUT OF, OR IN CONNECTION WITH THE SOFTWARE. LICENSE HOLDERS ARE SOLELY RESPONSIBLE FOR DETERMINING THE APPROPRIATENESS OF USE AND ASSUME ALL RISKS ASSOCIATED WITH ITS USE, INCLUDING BUT NOT LIMITED TO THE RISKS OF PROGRAM ERRORS, DAMAGE TO EQUIPMENT, LOSS OF DATA OR SOFTWARE PROGRAMS, OR UNAVAILABILITY OR INTERRUPTION OF OPERATIONS.

---
(c) 2019 [Max Kostinevich](https://maxkostinevich.com) - All rights reserved.
