//
//  RegisterViewController.m
//  MicroHealth
//
//  Created by Administrator on 8/9/15.
//  Copyright (c) 2015 Administrator. All rights reserved.
//

#import "RegisterViewController.h"

@interface RegisterViewController ()<UITextFieldDelegate>{
    IBOutlet UIScrollView *scrollView;
    IBOutlet UITextField *usernameTextField,*ConfirmUsernameTextField,*emailtextField,*PasswordTextField,*phoneNumberText;
    IBOutlet UIImageView* backgroundImage;
    int intKeyboardHeight;
}
-(IBAction)createAccount:(id)sender;
@end

@implementation RegisterViewController
-(void)viewWillAppear:(BOOL)animated{
   // [[self navigationController] setNavigationBarHidden:NO animated:YES];
    [backgroundImage setImage:[UIImage imageNamed:@"3-create-account.png"]];
    if (self.view.frame.size.height == 736)
    {
        intKeyboardHeight = 226;
    }
    else
    {
        intKeyboardHeight = 216;
    }
}
- (void)viewDidLoad {
    [super viewDidLoad];
    
    if ([[UIDevice currentDevice] userInterfaceIdiom] == UIUserInterfaceIdiomPhone)
    {
    [scrollView setContentSize:CGSizeMake(568,680)];
    }
    else{
    [scrollView setContentSize:CGSizeMake(1024,1450)];
    }
    // Do any additional setup after loading the view from its nib.
}
#pragma mark - ibaction
-(IBAction)createAccount:(id)sender{
    
    
    clientDetailViewController *obj = [[clientDetailViewController alloc]initWithNibName:@"clientDetailViewController" bundle:nil];
    [self.navigationController pushViewController:obj animated:YES];
}
#pragma mark - Textfield Delegates
- (BOOL)textFieldShouldReturn:(UITextField *)textField
{
    [scrollView setContentSize:CGSizeMake(568,680)];
    [textField resignFirstResponder];
    return YES;
}

- (BOOL)textFieldShouldBeginEditing:(UITextField *)textField
{
    if (self.view.frame.size.height == 736)
    {
        intKeyboardHeight = 226;
    }
    else
    {
        intKeyboardHeight = 216;
    }
    [scrollView setContentSize:CGSizeMake(CGRectGetWidth(scrollView.frame),CGRectGetHeight(scrollView.frame) + intKeyboardHeight)];
    
    [scrollView setContentOffset:CGPointMake(0, textField.center.y-60) animated:YES];
    
    return YES;
}
-(void)textFieldDidBeginEditing:(UITextField *)textField
{
    
    
    
}

- (void)textFieldDidEndEditing:(UITextField *)textField
{
    
    
    
    
    
    
}

- (BOOL)textFieldShouldClear:(UITextField *)textField{
    return YES;
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
