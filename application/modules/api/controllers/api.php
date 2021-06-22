<?php 

class Api extends MX_Controller
{
    
    public function __Construct()
    {
        
        $this->load->helper('url');
        
        $this->load->helper('form');
        
        $this->load->library('session');
        
        $this->load->model('Dbservice');
        
    }
    
    
    public function index()
    {
        
    }
    
    public function events($id=NULL)
    {
        if(isset($id)){
            $res = $this->Dbservice->query('select * from tbl_events where `published` = :published AND `id`=:id ',array(':published' => '1',':id' =>$id));
             $result = array();
             $events = array();
             if ($res && ($row = $res->fetch()) != false) {
                $result['id']=$row['id'];
                $result['title']=$row['title'];
                $result['content']=htmlentities(htmlentities($row['content']));
                $result['image']=$row['image'] ;
                $result['registered']=$row['registered'] ;
                $result['event_date']=$row['event_date'] ;
                $result['event_stdate']= $row['event_stdate'] ;
                $result['event_endate']= $row['event_endate'] ;
                $result['event_venue']=$row['event_venue'] ;
                $result['type']=$row['type'] ;
                $events[]=$result;
             }
        }
        else{
             $res = $this->Dbservice->query('select * from tbl_events where `published` = :published',array(':published' => '1'));
             $result = array();
             $events = array();
             while ($res && ($row = $res->fetch()) != false) {
                $result['id']=$row['id'];
                $result['title']=$row['title'];
                $result['content']=htmlentities(htmlentities($row['content']));
                $result['image']=$row['image'] ;
                $result['registered']=$row['registered'] ;
                $result['event_date']=$row['event_date'] ;
                $result['event_stdate']= $row['event_stdate'] ;
                $result['event_endate']= $row['event_endate'] ;
                $result['event_venue']=$row['event_venue'] ;
                $result['type']=$row['type'] ;
                $events[]=$result;
             }
        }

        echo json_encode($events);
  }

  public function pdf(){
    $res = $this->Dbservice->query('select * from tbl_press where `published` = :published',array(':published' => '1'));
    $result = array();
    $pdf = array();
     while ($res && ($row = $res->fetch()) != false) {
        $result['id']=$row['id'];
        $result['title']=$row['title'];
        $result['name']=$row['name'];
        $result['pdf_upload']='http://nrna.org.np/press_pdf/'.$row['pdf_upload'] ;
        $result['image']=$row['image'] ;
        $result['content']=htmlentities(htmlentities($row['content']));
        $result['press_category']= $row['press_category'] ;
        $result['press_year']= $row['press_year'] ;
        $result['sortorder']=$row['sortorder'] ;
        $result['homepage']=$row['homepage'] ;
        $result['keywords']=$row['keywords'] ;
        $result['registered']=$row['registered'] ;
        $pdf[]=$result;
     }
    echo json_encode($pdf);
  }

  public function newsletter(){
    $res = $this->Dbservice->query('select * from tbl_newsletter where `published` = :published',array(':published' => '1'));
    $newsletter = array();
     while ($res && ($row = $res->fetch()) != false) {
        $newsletter[]=$row;
     }
    echo json_encode($newsletter);
  }

 
}