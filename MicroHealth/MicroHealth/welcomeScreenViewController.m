//
//  welcomeScreenViewController.m
//  MicroHealth
//
//  Created by Administrator on 8/9/15.
//  Copyright (c) 2015 Administrator. All rights reserved.
//

#import "welcomeScreenViewController.h"

#import <AVFoundation/AVFoundation.h>
@interface welcomeScreenViewController ()
-(IBAction)signInViewAct:(id)sender;
-(IBAction)cancelActViewAct:(id)sender;
@end

@implementation welcomeScreenViewController
-(void)viewWillAppear:(BOOL)animated{
    [[self navigationController] setNavigationBarHidden:YES animated:YES];
}
- (void)viewDidLoad {
    [super viewDidLoad];
    
    [self textToSpeechMethod];
    
    [NSTimer scheduledTimerWithTimeInterval:1 target:self selector:@selector(textToSpeechMethod) userInfo:nil repeats:NO];
    // Do any additional setup after loading the view from its nib.
}
#pragma mark - IBActio
-(IBAction)cancelActViewAct:(id)sender{
    
    lastSignOutViewController *obj = [[lastSignOutViewController alloc]initWithNibName:@"lastSignOutViewController" bundle:nil];
    [self.navigationController pushViewController:obj animated:YES];
}
-(IBAction)signInViewAct:(id)sender{
   confirmationSignViewController *obj ;
    if ([[UIDevice currentDevice] userInterfaceIdiom] == UIUserInterfaceIdiomPhone)
    {
      obj = [[confirmationSignViewController alloc]initWithNibName:@"confirmationSignViewController" bundle:nil];
    }
    else{
        obj = [[confirmationSignViewController alloc]initWithNibName:@"confirmationSignViewController_ipad" bundle:nil];
    }
    [self.navigationController pushViewController:obj animated:YES];
    
    //confirmationSignViewController_ipad
}
- (void)didReceiveMemoryWarning {
    [super didReceiveMemoryWarning];
    // Dispose of any resources that can be recreated.
}
#pragma mark - PrivateMethod
-(void)textToSpeechMethod{
    AVSpeechSynthesizer *synthesizer = [[AVSpeechSynthesizer alloc]init];
    AVSpeechUtterance *utterance = [AVSpeechUtterance speechUtteranceWithString:@"Hello, welcome to MicroHealth. I am your virtual receptionist"];
    [utterance setRate:0.2f];
    [synthesizer speakUtterance:utterance];
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
