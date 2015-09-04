//
//  clientDetailViewController.m
//  MicroHealth
//
//  Created by Administrator on 8/10/15.
//  Copyright (c) 2015 Administrator. All rights reserved.
//

#import "clientDetailViewController.h"

@interface clientDetailViewController ()
{
    IBOutlet UIScrollView *scrollView;
    IBOutlet UILabel* visitingLable,*classifiedLable,*timeinLable,*timeoutLable;
    IBOutlet UIImageView *backgrounImage;
    
}
-(IBAction)nextScreenAct:(id)sender;
-(IBAction)cancelScreenAct:(id)sender;
@end

@implementation clientDetailViewController
-(void)viewWillAppear:(BOOL)animated{
    [[self navigationController] setNavigationBarHidden:NO animated:YES];
    //[backgrounImage setImage:[UIImage imageNamed:@"3-create-account.png"]];
}
- (void)viewDidLoad {
    [super viewDidLoad];
    
    if ([[UIDevice currentDevice] userInterfaceIdiom] == UIUserInterfaceIdiomPhone)
    {
    [scrollView setContentSize:CGSizeMake(568,840)];
    }
    else{
    [scrollView setContentSize:CGSizeMake(1024,1700)];
    }
    // Do any additional setup after loading the view from its nib.
}
#pragma mark - IbAction
-(IBAction)cancelScreenAct:(id)sender{
    sorryCatuterScreenViewController *obj = [[sorryCatuterScreenViewController alloc]initWithNibName:@"sorryCatuterScreenViewController" bundle:nil];
    [self.navigationController pushViewController:obj animated:YES];
}
-(IBAction)nextScreenAct:(id)sender{
    
    signatureScreenViewController *obj = [[signatureScreenViewController alloc]initWithNibName:@"signatureScreenViewController" bundle:nil];
    [self.navigationController pushViewController:obj animated:YES];
}
-(IBAction)timeSelection:(id)sender{
    [self.view endEditing:YES];
    RMDateSelectionViewController *dateSelectionVC = [RMDateSelectionViewController dateSelectionController];
    dateSelectionVC.hideNowButton = YES;
    dateSelectionVC.disableBouncingWhenShowing = NO;
    dateSelectionVC.disableMotionEffects = NO;
    dateSelectionVC.disableBlurEffects = NO;
    dateSelectionVC.datePicker.datePickerMode = UIDatePickerModeTime;
    dateSelectionVC.datePicker.minuteInterval = 5;
    dateSelectionVC.disableBlurEffects = YES;
    
    // To show selected date in picker
   
        NSDateFormatter *dateFormat = [[NSDateFormatter alloc] init];
        [dateFormat setDateFormat:@"EEEE"];
        NSString *weekDay = [dateFormat stringFromDate:[[NSDate date] dateByAddingTimeInterval:60*60*24*1]];
        
        if ([weekDay isEqualToString:@"Monday"])
        {
            dateSelectionVC.datePicker.date = [[NSDate date] dateByAddingTimeInterval:60*60*24*2];
        }
        else
        {
            dateSelectionVC.datePicker.date = [[NSDate date] dateByAddingTimeInterval:60*60*24*1];
        }
    
    [dateSelectionVC showWithSelectionHandler:^(RMDateSelectionViewController *vc, NSDate *aDate)
     {
         NSDateFormatter *dateFormat = [[NSDateFormatter alloc] init];
         [dateFormat setDateFormat:@"hh:mm a"];
         NSString *weekDay = [dateFormat stringFromDate:aDate];
         UIButton *btn=(UIButton*)sender;
         
         if (btn.tag==1)
         {
             timeinLable.text=weekDay;
         }
         else
         {
             timeoutLable.text=weekDay;
            
             
            
         }
     } andCancelHandler:^(RMDateSelectionViewController *vc) {
     }];
    
}
- (void)didReceiveMemoryWarning {
    [super didReceiveMemoryWarning];
    // Dispose of any resources that can be recreated.
}

/*
#pragma mark - Navigation

// In a storyboard-based application, you will often want to do a little preparation before navigation
- (void)prepareForSegue:(UIStoryboardSegue *)segue sender:(id)sender {
    // Get the new view controller using [segue destinationViewController].
    // Pass the selected object to the new view controller.
}
*/

@end
