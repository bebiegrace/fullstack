import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { FormsModule, ReactiveFormsModule } from '@angular/forms';
import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { UserLoginComponent } from './user-login/user-login.component';
import { UserRegisterComponent } from './user-register/user-register.component';
import { LandingpageComponent } from './landingpage/landingpage.component';
import { WriterViewComponent } from './writer-view/writer-view.component';
import { ReaderViewComponent } from './reader-view/reader-view.component';
import { HttpClientModule } from '@angular/common/http';
import { CreateComponent } from './create/create.component';
import { NavHeaderComponent } from './nav-header/nav-header.component';
import { DraftComponent } from './draft/draft.component';
import { DraftViewComponent } from './draft-view/draft-view.component';
import { PublishViewComponent } from './publish-view/publish-view.component';
import { CreateViewComponent } from './create-view/create-view.component';
import { PublishedComponent } from './published/published.component';
import { EditComponent } from './edit/edit.component';
import { EditViewComponent } from './edit-view/edit-view.component';
import { LoginComponent } from './login/login.component';
import { RegisterComponent } from './register/register.component';
import { WriterComponent } from './writer/writer.component';
import { ReaderComponent } from './reader/reader.component';
import { AboutComponent } from './about/about.component';
import { ContactComponent } from './contact/contact.component';
import { ProfileComponent } from './profile/profile.component';
import { ProfileUpdateComponent } from './profile-update/profile-update.component';
import { ReaderHeadComponent } from './reader-head/reader-head.component';
import { SideNavComponent } from './side-nav/side-nav.component';
import { Nav1Component } from './nav1/nav1.component';
import { SideNav1Component } from './side-nav1/side-nav1.component';

const appRoute =[
{path: '', redirectTo: 'Landingpage', pathMatch: 'full'},
{path: 'Landingpage', component: LandingpageComponent},
{path: 'UserRegister', component: UserRegisterComponent},
{path: 'UserLogin', component: UserLoginComponent},
{path: 'Create', component: CreateComponent},
{path: 'NavHeader', component: NavHeaderComponent},
{path: 'Login', component: LoginComponent},
]


@NgModule({
  declarations: [
    AppComponent,
    UserLoginComponent,
    UserRegisterComponent,
    LandingpageComponent,
    WriterViewComponent,
    ReaderViewComponent,
    CreateComponent,
    NavHeaderComponent,

    DraftComponent,
    DraftViewComponent,
    PublishViewComponent,
    CreateViewComponent,
    PublishedComponent,
    EditComponent,
    EditViewComponent,
    LoginComponent,
    RegisterComponent,
    WriterComponent,
    ReaderComponent,
    AboutComponent,
    ContactComponent,
    ProfileComponent,
    ProfileUpdateComponent,

    ReaderHeadComponent,
     SideNavComponent,
     Nav1Component,
     SideNav1Component,

  ],

  imports: [
    BrowserModule,
    AppRoutingModule,
    FormsModule,
    ReactiveFormsModule,
    HttpClientModule
  ],

  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
