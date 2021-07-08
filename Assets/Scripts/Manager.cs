using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class Manager : MonoBehaviour
{

    public GameObject lion, gorilla, giraffe, elephant, lionDaD, gorillaDaD, giraffeDaD, elephantDaD;

    Vector3 lionInitialPos, gorillaInitialPos, giraffeInitialPos, elephantInitialPos;  

    public AudioSource source;
    public AudioClip[] correct;
    public AudioClip incorrect;

    bool gorillaCorrect, lionCorrect, elephatCorrect, giraffeCorrect = false; 
    void Start()
    {
        gorillaInitialPos = gorilla.transform.position;
        lionInitialPos = lion.transform.position;
        giraffeInitialPos = giraffe.transform.position;
        elephantInitialPos = elephant.transform.position; 
        
    }

    public void DragLion(){
        lion.transform.position = Input.mousePosition;
    }

    public void DragGorilla(){
        gorilla.transform.position = Input.mousePosition;
    }

    public void DragGiraffe(){
        giraffe.transform.position = Input.mousePosition;
    } 

    public void DragElephant(){
        elephant.transform.position = Input.mousePosition;
        
    }


    public void DropLion()
    {
        float Distance = Vector3.Distance(lion.transform.position, lionDaD.transform.position);
        if(Distance<50){
            lion.transform.position = lionDaD.transform.position;
            source.clip = correct[Random.Range(0, correct.Length)];
            source.Play();
            lionCorrect = true;
        }
        else{
            lion.transform.position = lionInitialPos;
            source.clip = incorrect;
            source.Play();
        }
    }
    
    public void DropGorilla(){
        float Distance = Vector3.Distance(gorilla.transform.position, gorillaDaD.transform.position);
        if(Distance<50){
            gorilla.transform.position = gorillaDaD.transform.position;
            source.clip = correct[Random.Range(0, correct.Length)];
            source.Play();
            gorillaCorrect = true;
        }
        else{
            gorilla.transform.position = gorillaInitialPos;
            source.clip = incorrect;
            source.Play();
        }        
    }

    public void DropGiraffe(){
        float Distance = Vector3.Distance(giraffe.transform.position, giraffeDaD.transform.position);
        if(Distance<50){
            giraffe.transform.position = giraffeDaD.transform.position;
            source.clip = correct[Random.Range(0, correct.Length)];
            source.Play();
            giraffeCorrect = true;
        }
        else{
            giraffe.transform.position = giraffeInitialPos;
            source.clip = incorrect;
            source.Play();
        }
    }
    public void DropElephant(){
        float Distance = Vector3.Distance(elephant.transform.position, elephantDaD.transform.position);
        if(Distance<50){
            elephant.transform.position = elephantDaD.transform.position;
            source.clip = correct[Random.Range(0, correct.Length)];
            source.Play();
            elephatCorrect = true;
        }
        else{
            elephant.transform.position = elephantInitialPos;
            source.clip = incorrect;
            source.Play();
        }
    }

    void Update(){

        if(gorillaCorrect && lionCorrect && elephatCorrect && giraffeCorrect){
            Debug.Log("YOU WIN");
        }
    }

}
