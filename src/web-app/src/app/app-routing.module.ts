import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { HomeComponent } from './components/pages/home/home.component';
import { SplashComponent } from './components/pages/splash/splash.component';
import { ApiResultsComponent } from './components/pages/api-results/api-results.component';
import { TextEditorComponent } from './components/text-editor/text-editor.component';
import { TestComponent } from './components/pages/test/test.component';
import { LoginComponent } from './components/pages/login/login.component';
import { RegisterComponent } from './components/pages/register/register.component';
import { ProfileComponent } from './components/pages/profile/profile.component';
import { SplashSlideshowComponent } from './components/pages/splash/splash-slideshow/splash-slideshow.component';


const routes: Routes = [
  { path: '', redirectTo: '/splash', pathMatch: 'full' },
  { path: 'home', component: HomeComponent },
  { path: 'splash', component: SplashComponent },
  { path: 'register', component: RegisterComponent },
  { path: 'login', component: LoginComponent },
  { path: 'profile', component: ProfileComponent },

  { path: 'slideshow', component: SplashSlideshowComponent },
  { path: 'api-results', component: ApiResultsComponent },
  { path: 'text', component: TextEditorComponent },
  { path: 'test', component: TestComponent },
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
