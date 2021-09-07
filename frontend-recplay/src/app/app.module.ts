import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { HttpClientModule } from '@angular/common/http';
import { AppComponent } from './app.component';
import { TerapeutasComponent } from './terapeutas/terapeutas.component';
import { PacientesComponent } from './pacientes/pacientes.component';
import { PuntajesComponent } from './puntajes/puntajes.component';
import { FormTerapeutaComponent } from './terapeutas/form-terapeuta.component';
import { Routes,RouterModule, Router } from '@angular/router';
import { FormsModule } from '@angular/forms';
import { FormPacienteComponent } from './pacientes/form-paciente.component';
const routes:Routes=[
  {path:'',redirectTo:'/terapeutas',pathMatch:'full'},
  {path:'terapeutas',component:TerapeutasComponent},
  {path:'terapeutas/form',component:FormTerapeutaComponent},
  {path:'terapeutas/form/:id',component:FormTerapeutaComponent},
  {path:'pacientes',component:PacientesComponent},
  {path:'pacientes/form',component:FormPacienteComponent},
  {path:'pacientes/form/:id',component:FormPacienteComponent},

]
@NgModule({
  declarations: [
    AppComponent,
    TerapeutasComponent,
    PacientesComponent,
    PuntajesComponent,
    FormTerapeutaComponent,
    FormPacienteComponent
  ],
  imports: [
    BrowserModule,
    HttpClientModule,
    FormsModule,
    RouterModule.forRoot(routes)
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
