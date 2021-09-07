import { Injectable } from '@angular/core';
import { HttpClient} from '@angular/common/http';
import { Observable } from 'rxjs';
import { Paciente } from './paciente';
@Injectable({
  providedIn: 'root'
})
export class PacienteService {
  private url:string="http://localhost:8000/api/paciente";
  constructor(private http:HttpClient) { }
  //obtener terapeutas
  getAll():Observable<Paciente[]>{
    return this.http.get<Paciente[]>(this.url);
  }
  //crear terapeuta
  create(paciente:Paciente):Observable<Paciente>{
    return  this.http.post<Paciente>(this.url,paciente);
  }
  //obtener terapeuta
  get(id:number):Observable<Paciente>{
    return this.http.get<Paciente>(this.url+'/'+id);
  }
  //actualizar terapeuta
  update(paciente:Paciente):Observable<Paciente>{
    return this.http.put<Paciente>(this.url+'/'+paciente.id,paciente);
  }
  delete(id:number):Observable<Paciente>{
    return this.http.delete<Paciente>(this.url+'/'+id);
  }
}
