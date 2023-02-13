// import { RegisterComponent } from './register/register.component';

import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { UserLoginComponent } from './user-login/user-login.component';
import { LandingpageComponent } from './landingpage/landingpage.component';
import { UserRegisterComponent } from './user-register/user-register.component';
import { ReaderViewComponent } from './reader-view/reader-view.component';
import { WriterViewComponent } from './writer-view/writer-view.component';
import { FormsModule } from '@angular/forms';
import { BrowserModule } from '@angular/platform-browser';
import { AppComponent } from './app.component';
import { CreateComponent } from './create/create.component';
import { NavHeaderComponent } from './nav-header/nav-header.component';
import { SideNavComponent } from './side-nav/side-nav.component';
import { DraftComponent } from './draft/draft.component';
import { DraftViewComponent } from './draft-view/draft-view.component';
import { CreateViewComponent } from './create-view/create-view.component';
import { EditViewComponent } from './edit-view/edit-view.component';
import { PublishViewComponent } from './publish-view/publish-view.component';
import { LoginComponent } from './login/login.component';
import { RegisterComponent } from './register/register.component';
import { AboutComponent } from './about/about.component';
import { ContactComponent } from './contact/contact.component';
import { ProfileUpdateComponent } from './profile-update/profile-update.component';

const routes: Routes = [
  // {
  //   path: 'register',
  //   component: RegisterComponent
  // },




  {
    path: 'reader-view',
    component: ReaderViewComponent
  },
  {
    path: 'about',
    component: AboutComponent
  },

  {
    path: 'writer-view',
    component: WriterViewComponent
  },

  {
    path: 'sidenav',
    component: SideNavComponent
  },
  {
    path: 'navheader',
    component: NavHeaderComponent
  },


  {
    path: 'draft',
    component: DraftViewComponent
  },


  {
    path: 'createv',
    component: CreateViewComponent
  },

  {
    path: 'editv',
    component: EditViewComponent
  },

  {
    path: 'publishedv',
    component: PublishViewComponent
  },
  {
    path: 'reader-register',
    component: UserRegisterComponent
  },

  {
    path: 'writer-register',
    component: RegisterComponent
  },

  {
    path: 'reader-login',
    component: UserLoginComponent
  },

  {
    path: 'writer-login',
    component: LoginComponent
  },

  {
    path: '',
    component: LandingpageComponent
  },
  {
    path: 'profile',
    component: ProfileUpdateComponent
  },

  // {
  //   path: '',
  //   component: LandingpageComponent, children: [
  //     {path: 'writer-login', component: LoginComponent},
  //     {path: 'reader-login', component: UserLoginComponent},
  //     {path: 'writer-register', component: RegisterComponent},
  //     {path: 'reader-register', component:UserRegisterComponent},
  //     {path: 'contact', component:ContactComponent},
  //     {path: 'about', component:AboutComponent},
  //   ]
  // },

// {


//   path: 'about',
//   component: AboutComponent, children: [
//     {path: 'writer-login', component: LoginComponent},
//     {path: 'reader-login', component: UserLoginComponent},
//     {path: 'writer-register', component: RegisterComponent},
//     {path: 'reader-register', component:UserRegisterComponent},
//     {path: 'contact', component:ContactComponent},

//   ],
// },

  {
    path: 'contact',
    component: ContactComponent
  },



];


@NgModule({
  imports: [BrowserModule,FormsModule,RouterModule.forRoot(routes)],
  //  declarations: [RegisterComponent, WriterViewComponent, UserLoginComponent, LandingpageComponent], // declare the components
  exports: [RouterModule]
})
export class AppRoutingModule {}

