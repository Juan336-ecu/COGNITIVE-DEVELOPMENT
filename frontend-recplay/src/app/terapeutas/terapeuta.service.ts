import { Injectable } from '@angular/core';
import { HttpClient} from '@angular/common/http';
import { Observable } from 'rxjs';
import { Terapeuta } from './terapeuta';
@Injectable({
  providedIn: 'root'
})
export class TerapeutaService {
  private url:string="http://localhost:8000/api/terapeuta";
  constructor(private http:HttpClient) { }
  //obtener terapeutas
  getAll():Observable<Terapeuta[]>{
    return this.http.get<Terapeuta[]>(this.url);
  }
  //crear terapeuta
  create(terapeuta:Terapeuta):Observable<Terapeuta>{
    return  this.http.post<Terapeuta>(this.url,terapeuta);
  }
  //obtener terapeuta
  get(id:number):Observable<Terapeuta>{
    return this.http.get<Terapeuta>(this.url+'/'+id);
  }
  //actualizar terapeuta
  update(terapeuta:Terapeuta):Observable<Terapeuta>{
    return this.http.put<Terapeuta>(this.url+'/'+terapeuta.id,terapeuta);
  }
  delete(id:number):Observable<Terapeuta>{
    return this.http.delete<Terapeuta>(this.url+'/'+id);
  }
}
