import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { RouteReuseStrategy } from '@angular/router';
import { IonicModule, IonicRouteStrategy } from '@ionic/angular';
import { AppComponent } from './app.component';
import { AppRoutingModule } from './app-routing.module';
import { HttpClientModule } from '@angular/common/http';
import { PostProvider } from '../providers/post-provider';
@NgModule({
 declarations: [AppComponent],
 imports: [
 BrowserModule,
 IonicModule.forRoot(),
 AppRoutingModule,
 HttpClientModule,
 ],
 providers: [
 PostProvider,
 { provide: RouteReuseStrategy, useClass: IonicRouteStrategy },
 ],
 bootstrap: [AppComponent],
})
export class AppModule {}