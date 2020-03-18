import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { FormsModule } from '@angular/forms';
import { HttpClientModule } from '@angular/common/http';

// modules
import { DataTablesModule } from 'angular-datatables';
import { QuillModule } from 'ngx-quill';

// website skeleton
import { HeaderComponent } from './components/header/header.component';
import { NavbarComponent } from './components/header/navbar/navbar.component';
import { FooterComponent } from './components/footer/footer.component';
import { FooterAddressComponent } from './components/footer/footer-address/footer-address.component';
import { FooterPrivacyComponent } from './components/footer/footer-privacy/footer-privacy.component';

// pages
import { HomeComponent } from './components/pages/home/home.component';
import { RecentsComponent } from './components/recents/recents.component';
import { RegisterComponent } from './components/pages/register/register.component';
import { LoginComponent } from './components/pages/login/login.component';
import { ProfileComponent } from './components/pages/profile/profile.component';

// testing
import { ApiResultsComponent } from './components/pages/api-results/api-results.component';
import { TextEditorComponent } from './components/text-editor/text-editor.component';
import { TestComponent } from './components/pages/test/test.component';
import { NavbarTestComponent } from './components/header/navbar-test/navbar-test.component';
import { SplashComponent } from './components/pages/splash/splash.component';
import { SplashSlideshowComponent } from './components/pages/splash/splash-slideshow/splash-slideshow.component';
import { SplashLoginComponent } from './components/pages/splash/splash-login/splash-login.component';
import { MessageComponent } from './components/message/message.component';
import { ProfileInfoComponent } from './components/pages/profile/profile-info/profile-info.component';
import { ProfileMessagesComponent } from './components/pages/profile/profile-messages/profile-messages.component';

@NgModule({
  declarations: [
    AppComponent,

    HeaderComponent,
    NavbarComponent,
    FooterComponent,
    FooterAddressComponent,
    FooterPrivacyComponent,

    HomeComponent,
    RecentsComponent,
    RegisterComponent,
    LoginComponent,
    ProfileComponent,

    NavbarTestComponent,
    ApiResultsComponent,
    TextEditorComponent,
    TestComponent,
    SplashComponent,
    SplashSlideshowComponent,
    SplashLoginComponent,
    MessageComponent,
    ProfileInfoComponent,
    ProfileMessagesComponent,
  ],
  imports: [
    BrowserModule,
    FormsModule,
    HttpClientModule,
    AppRoutingModule,
    DataTablesModule,
    QuillModule.forRoot(),
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
