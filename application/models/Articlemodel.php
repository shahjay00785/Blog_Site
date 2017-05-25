<?php
class Articlemodel extends CI_Model{
   public function article_list(){

     $user_id=$this->session->userdata('user_id');
     $query= $this->db
                      ->select('title')
                      ->select('id')
                      ->from('articles')
                      ->where('user_id',$user_id)
                      ->get();

                    //  print_r($query->result()); exit;
     return $query->result();//so many rows that why row
   }

 public function update_article($article_id,Array $article){
   return $this->db
         ->where('id',$article_id)
         ->update('articles',$article);


   //$this->db->update('articles',$article,[id'=>$article_id])

 }

 public function find_article($article_id){
   //exit($article_id);
  $query=  $this->db->select(['id','title','body'])
    ->where('id',$article_id)
    ->get('articles');

    return $query->row();  // only one row
  //  return $query->result(); array return
 }

   public function add_article($array){
    //  $t=$array['title'];
      //$this->db->insert('articles_'['article_title'=>$t]);//if databas naem dirrent
      //$affected_row=$this->db->insert('articles','$array');
      //return $affected_row;
      //print_r($affected_row);
      //exit;
      return $this->db->insert('articles',$array);
   }



}

 ?>
