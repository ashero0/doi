import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { TestComponent } from './test.component';


const routes: Routes = [
  { path: 'testing', component: TestComponent }
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
